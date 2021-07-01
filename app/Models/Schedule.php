<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public $table = 'schedule';

    public function passengers(){

        return $this->hasMany('App\Models\Passenger');
    }


}
