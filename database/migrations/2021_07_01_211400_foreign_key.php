<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passenger', function (Blueprint $table) {
            $table->bigInteger('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('id')->on('schedule')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passenger', function (Blueprint $table) {
            $table->dropForeign(['schedule_id']);
        });
    }
}
