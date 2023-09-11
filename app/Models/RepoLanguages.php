<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use App\Models\ApiModel;

class RepoLanguages extends ApiModel {

    // An associative array of languages and their percentage of the project,
    // represented as language => percentage and stored here.
    public $languages;

    // Total bytes, used for calculating the percentage attached to each
    // language in the above array
    public $total_bytes;

    public function __construct($data) {
        $this->total_bytes = array_sum($data);
        $this->languages = array();
        foreach($data as $language => $bytes) {
            $percentage = ceil(($bytes/$this->total_bytes)*100);
            $this->languages[$language] = $percentage;
        }
    }

    public static function apiUrl($search) {
        return $search;
    }
}

?>