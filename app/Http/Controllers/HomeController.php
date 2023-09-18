<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technologies;

class HomeController extends Controller
{
    public function __invoke() {
        $technologies = Technologies::all();

        return view('home')
            ->with('title', "Kevin Hoelck Portfolio - Home")
            ->with('technologies', $technologies);
    }
}
