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


    public function addPassenger(Request $request){
        
        $firstName =  $request->firstName;
        $lastName =  $request->lastName;
        $phoneNumber =  "" . $request->phoneNumber;
        $schedule_id = $request->schedule_id;
       
            DB::table('passenger')->insert([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phoneNumber' => $phoneNumber,
                'schedule_id' => $schedule_id
            ]);

        return view('index');
    }
}
