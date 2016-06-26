<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;

use App\Http\Requests;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Players::all();
        return view('players.index', [
            'players' => $players
        ]);
    }
}
