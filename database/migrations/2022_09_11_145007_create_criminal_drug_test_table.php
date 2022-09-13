<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriminalDrugTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminal_drug_tests', function (Blueprint $table) {
            $table->id();
            $table->string('case_no');
            $table->string('suspect_name');
            $table->string('mother_unit')->nullable();
            $table->string('operation_type');
            $table->string('examiner')->nullable();
            $table->string('investigator')->nullable();
            $table->string('incident_date');
            $table->string('incident_time');
            $table->string('speciment_count');
            $table->string('pph_count');
            $table->string('qty_received');
            $table->string('gross_weight');
            $table->string('classification');
            $table->string('delivered_by')->nullable();
            $table->string('description');
            $table->string('received_by')->nullable();
            $table->string('evidence_status')->nullable();
            $table->string('qty_turned_over');
            $table->string('date_last_withdrawn')->nullable();
            $table->string('court_branch')->nullable();
            $table->string('criminal_case_no')->nullable();
            $table->string('qty_remaining');
            $table->string('is_no_movement');
            $table->string('requesting_party')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('criminal_drug_tests');
    }
}
