<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class TrainController extends Controller
{
    //
    public function index()
    {
        $alltrain = Trains::all();
        $trainsToday = Trains::where('data_partenza', '2022-05-23')->get();
        return view('home', compact('alltrain', 'trainsToday'));
    }
}