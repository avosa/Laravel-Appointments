<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorServicePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_service', function (Blueprint $table) {
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id', 'doctor_id_fk_23444562')->references('id')->on('doctors')->onDelete('cascade');
            $table->unsignedInteger('service_id');
            $table->foreign('service_id', 'service_id_fk_23444562')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_service');
    }
}
