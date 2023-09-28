<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubUser;
use App\Models\GithubRepo;

class PortfolioController extends Controller
{
    // Define different actions here, based on default view vs. another user view received via post
    public function myPortfolio() {
        $user = GithubUser::find("khoelck0315");
        $repos = $user->repos();
        $languages = $user->languages();
        
        return view('portfolio')
            ->with('user', $user)
            ->with('page', 'portfolio')
            ->with('repositories', $repos)
            ->with('languages', $languages);
    }

    public function userGithub(Request $request) {
        $user = GithubUser::find($request->username);

        // Check to see if user was found - if not, return a different view!
        if (!$user) {
            return view('usernotfound', ['user' => $request->username]);
        }
        else {
            $repos = $user->repos();
            $languages = $user->languages();
            
            return view('portfolio')
                ->with('user', $user)
                ->with('repositories', $repos)
                ->with('languages', $languages);
        }
    }
}
