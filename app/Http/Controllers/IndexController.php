<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Pemain;

class IndexController extends Controller
{
    
    public function game($id){
        $mahes = Pemain::where('game_id',$id)->get();
        $data = Game::find($id);

        return view('game-detail', compact('data', 'mahes'));
    }
    public function tampilan(){
        $data = Game::all();
        return view('index', compact('data'));
    }

    
}

