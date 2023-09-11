<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use App\Models\ApiModel;

class GithubUser extends ApiModel
{
    // The API endpoint that will be queried for data to hydrate the model.
    // Include the trailing slash!
    

    // Github user name
    public $login;

    // Github repos url
    public $repos_url;

    // Github avatar url
    public $avatar_url;

    // Github bio
    public $bio;

    public function __construct($data) {
        $this->login = $data['login'];
        $this->repos_url = $data['repos_url'];
        $this->avatar_url = $data['avatar_url'];
        $this->bio = $data['bio'];
    }

    public static function apiUrl($search) {
        return "https://api.github.com/users/".$search;
    }

    // Define the user to repos relationship
    public function repos() {
        $repos = GithubRepo::find($this->repos_url);
        return $repos;
    }
    
}
