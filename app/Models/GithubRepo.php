<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\ApiModel;
use \DateTime;

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
        $this->updated_at = new DateTime($data['updated_at']);
        $this->languages = self::getLanguages($this->languages_url);
    }

    public static function apiUrl($search) {
        return $search;
    }

    public static function getLanguages($url) {
        $github = Config::get('services.github');
        $response = Http::withToken($github['pat'])->get($url);
        $data = $response->json();
        $total_bytes = array_sum($data);
        $list = array();
        foreach($data as $name => $bytes) {
            $percentage = ceil(($bytes/$total_bytes)*100);
            $language = array(
                'name' => $name,
                'bytes' => $bytes,
                'percentage' => $percentage
            );
            array_push($list, $language);
        }
        return array(
            "list" => $list,
            "total_bytes" => $total_bytes
        );
    }   

}
