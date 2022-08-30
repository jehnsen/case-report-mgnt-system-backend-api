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
            $table->string('case_no');
            $table->string('case_nature');
            $table->string('requesting_party');
            $table->longText('incident_title');
            $table->longText('incident_description');
            $table->string('investigator');
            $table->string('disposition');
            $table->string('location');
            $table->string('incident_date');
            $table->string('incident_time');
            $table->string('victim');
            $table->string('suspect');
            $table->string('reported_by');
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
