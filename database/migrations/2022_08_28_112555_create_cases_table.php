<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('division');
            $table->string('case_no');
            $table->string('case_nature');
            $table->string('requesting_party');
            $table->longText('incident_title');
            $table->longText('incident_description');
            $table->string('investigator')->nullable();
            $table->string('disposition')->nullable();
            $table->string('location')->nullable();
            $table->string('incident_date');
            $table->string('incident_time');
            $table->string('victim')->nullable();
            $table->string('suspect')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('reported_by')->nullable();
            $table->string('encoder_id')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('incidents');
    }
}
