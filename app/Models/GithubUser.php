<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use App\Models\ApiModel;


class GithubUser extends ApiModel
{
    // The API endpoint that will be queried for data to hydrate the model.
    // Include the trailing slash!

    // Github user login name
    public $login;

    // Github user name
    public $name;

    // Github repos url
    public $repos_url;

    // Github avatar url
    public $avatar_url;

    // Github bio
    public $bio;


    public function __construct($data) {
        $this->login = $data['login'];
        $this->name = $data['name'] ?? $data['login'];
        $this->repos_url = $data['repos_url'];
        $this->avatar_url = $data['avatar_url'];
        $this->bio = $data['bio'];
        $this->avatar = $data['avatar_url'];
    }

    public static function apiUrl($search) {
        return "https://api.github.com/users/".$search;
    }

    // Define the user to repos relationship
    public function repos() {
        $repos = GithubRepo::find($this->repos_url);
        return $repos;
    }
    
    // Define the user to languages relationship
    public function languages() {
        $repos = $this->repos();
        $repo_languages = array();
        foreach($repos as $repo) {
            foreach($repo->languages['list'] as $language) {
                if(array_key_exists($language['name'], $repo_languages)) {
                    $repo_languages[$language['name']] += $language['bytes'];
                }
                else {
                    $repo_languages[$language['name']] = $language['bytes'];
                }
            }
        }

        $total_bytes = array_sum($repo_languages);
        array_walk($repo_languages, function(&$lang, $key, $bytes) {
            $lang = ceil(($lang/$bytes)*100);
        }, $total_bytes);
        uasort($repo_languages, function ($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a > $b) ? -1 : 1;
        });
        
        return $repo_languages;
    }
}
