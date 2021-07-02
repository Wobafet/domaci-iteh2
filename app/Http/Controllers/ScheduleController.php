<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index (){

        $schedules = Schedule::all();
        return view ('schedule',[
        'schedules'=>$schedules
        ]);
    }

  public function delete($schedule_id)
  {
      $schedule = Schedule::find($schedule_id);

      
      if ($schedule->delete()){
          return response()->json([
              'message' => "Schedule successfully deleted !"
          ]);

      }
      return response()->json([
          'message' => "Schedule already deleted !"
      ]);

    
  }

  public function getForm(Request $request){
    $schedule_id = $request->query('schedule_id');
    $schedule = Schedule::find($schedule_id);

    return view('trip', [
        'schedule' => $schedule
    ]);
  }

}
