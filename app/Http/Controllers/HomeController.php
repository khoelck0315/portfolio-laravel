<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technologies;

class HomeController extends Controller
{
    public function __invoke(Request $request) {
        $technologies = Technologies::all();

        if($request->route()->named('about')) {
            return view('home')
            ->with('title', "Kevin Hoelck Portfolio - Home")
            ->with('page', 'about')
            ->with('about_entry', true)
            ->with('technologies', $technologies);
        }
        else {
            return view('home')
            ->with('title', "Kevin Hoelck Portfolio - Home")
            ->with('page', 'home')
            ->with('technologies', $technologies);
        }
        
    }
}
