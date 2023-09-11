<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubUser;
use App\Models\GithubRepo;

class PortfolioController extends Controller
{
    public function __invoke() {
        $repos = GithubUser::find("khoelck0315")->repos();
        
        return view('portfolio')
            ->with('repositories', $repos); 
    }
}
