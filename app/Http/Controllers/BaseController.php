<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;

use App\Http\Requests;
use Base;

class BaseController extends Controller
{
    public function index()
    {
        $cops = Players::where('coplevel', '>', 0)->orderBy('coplevel', 'DESC')->take(10)->get();
        $players = Players::orderBy('bankacc', 'DESC')->take(10)->get();
        $medics = Players::where('mediclevel', '>', '0')->take(10)->get();
        Base::title('Dashboard');
        Base::smalltitle('Statistics Overview');
        return view('index', [
            'cops'  =>  $cops,
            'players'   =>  $players,
            'medics'    =>  $medics
        ]);
    }
}
