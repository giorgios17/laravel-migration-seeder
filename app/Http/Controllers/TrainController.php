<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainModel;

class TrainController extends Controller
{
    //
    public function index()
    {
        $alltrain = TrainModel::all();
        return view('home', $alltrain);
    }
}