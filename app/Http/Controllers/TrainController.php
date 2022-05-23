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
        return view('home', compact('alltrain'));
    }
}