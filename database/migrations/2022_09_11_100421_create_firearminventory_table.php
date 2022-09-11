<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirearminventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firearminventory', function (Blueprint $table) {
            $table->id();
            $table->string('case_no');
            $table->string('firearm_name');
            $table->string('cartridge')->nullable();
            $table->string('fcc')->nullable();
            $table->string('fb')->nullable();
            $table->string('accessories')->nullable();
            $table->string('fcaliber')->nullable();
            $table->string('fmake')->nullable();
            $table->string('fmodel')->nullable();
            $table->string('ftype')->nullable();
            $table->string('fserial_no')->nullable();
            $table->string('requesting_party')->nullable();
            $table->string('incident_date');
            $table->string('incident_time');
            $table->string('location')->nullable();
            $table->string('suspect_name')->nullable();
            $table->string('victim_name')->nullable();
            $table->string('status');
            $table->string('remarks')->nullable();
            $table->integer('encoder_id');
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
        Schema::dropIfExists('firearminventory');
    }
}
