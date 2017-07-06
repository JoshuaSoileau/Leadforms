<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $bestTeam = ['Josh', 'Michael', 'Brent', 'Rob', 'Luke', 'Marc'];
        return view('about')->with('team', $bestTeam);
    }
}
