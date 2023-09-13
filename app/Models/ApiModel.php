<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

abstract class ApiModel
{
    // Define the API url that should be called, based on the model
    public static function apiUrl($search) {
        // Logic to build URL here
    }

    
    public static function find($search) {
        $class = get_called_class();
        $url = $class::apiUrl($search);
        $github = Config::get('services.github');
        $response = Http::withToken($github['pat'])->get($url);

        if($response->successful()) {
            $data = $response->json();

            // Check to see the response contains a result or collection of results
            if(array_is_list($data)) {
                $collection = array();
                foreach($data as $result) {
                    $row = new $class($result);
                    array_push($collection, $row);
                }
                return $collection;
            }
            else return new $class($data);
        }
        else {
            return false;
        } 
    }
}
