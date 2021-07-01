<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 30; $i++) { 

            DB::table('passenger')->insert([
                'firstName'=>Str::random(rand(4,7)),
                'lastName'=>Str::random(rand(3,7)),
                'phoneNumber'=>'+382 6 '.rand(1000000,9999999),
                'schedule_id'=>rand(1,30)
            ]);
        }
    }
}
