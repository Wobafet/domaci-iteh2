<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) { 
            DB::table('schedule')->insert([
                'beginDes'=>Str::random(rand(4,7)),
                'endDes'=>Str::random(rand(5,7)),
                'date'=>Carbon::today()->addDays(rand(10,160))
            ]);
        }
    }
}
