<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bustime', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('station_id')->constrained('stations')->onDelete('cascade');
            $table->foreignId('track_id')->constrained('tracks')->onDelete('cascade');
            $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade');



           // $table->string('bus_timee');

           $table->string('bus_timee');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bustime');
    }
};
