<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        if(Auth::check()) {
            return view('dashboard');
        } else {
            return view('home');
        }
    }

    public function about()
    {
        $bestTeam = ['Josh', 'Michael', 'Brent', 'Rob', 'Luke', 'Marc'];
        return view('about')->with('team', $bestTeam);
    }
}
