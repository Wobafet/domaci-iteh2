<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function index(){

        $passengers = Passenger::all();
        return view ('passenger',[
        'passengers'=>$passengers
        ]);

        return view ('passenger');
    }
}
