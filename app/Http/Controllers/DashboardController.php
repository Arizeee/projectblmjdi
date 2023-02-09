<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $data = Game::all();
        return view('dashboard.Dashboard', compact('data'));
    }

    
}
