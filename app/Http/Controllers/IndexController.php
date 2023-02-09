<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Pemain;

class IndexController extends Controller
{
    
    public function game($id){
        $data = Game::find($id);
        $tai = Pemain::find($id);

        return view('game-detail', compact('data'));
    }
    public function tampilan(){
        $data = Game::all();
        return view('index', compact('data'));
    }

    
}

