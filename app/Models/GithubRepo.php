<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\ApiModel;

class GithubRepo extends ApiModel
{

    public $name;

    public $description;

    public $html_url;

    public $languages_url;
    
    public $languages;

    public function __construct($data) {
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->html_url = $data['html_url'];
        $this->languages_url = $data['languages_url'];
    
        // Link logic to lookup languages and add them here
        $this->languages = RepoLanguages::find($this->languages_url);
    }

    public static function apiUrl($search) {
        return $search;
    }

}
