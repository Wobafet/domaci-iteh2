<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    public $table = 'passenger';
   
    public function schedule (){
        return $this->belongsTo('App\Model\Schedule');
    }
}
