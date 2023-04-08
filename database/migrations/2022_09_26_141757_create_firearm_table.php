<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirearmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firearm', function (Blueprint $table) {
            $table->id();
            $table->string('case_no');
            $table->string('firearm_name')->nullable();
            $table->string('cartridge')->nullable();
            $table->string('fcc')->nullable();
            $table->string('fb')->nullable();
            $table->string('accessories')->nullable();
            $table->string('fcaliber')->nullable();
            $table->string('fmake')->nullable();
            $table->string('fmodel')->nullable();
            $table->string('ftype')->nullable();
            $table->string('fserial_no')->nullable();
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
        Schema::dropIfExists('firearm');
    }
}
