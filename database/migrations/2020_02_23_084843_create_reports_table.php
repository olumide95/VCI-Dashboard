<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('request_id');
            $table->foreign('request_id')->references('id')->on('requests');
            $table->string('owner')->nullable();
            $table->string('inspection_date')->nullable();
            $table->string('inspection_time')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('color')->nullable();
            $table->string('chasis_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('odometer_reading')->nullable();
            $table->json('body_integrity')->nullable();
            $table->json('vehicle_information')->nullable();
            $table->json('drivers_controls')->nullable();
            $table->json('lighting_electric')->nullable();
            $table->json('other_details')->nullable();
            $table->string('inspection_result')->nullable();
            $table->string('inspected_by')->nullable();
            $table->string('signature'->nullable());
            $table->boolean('status')->default(0);
            $table->SoftDeletes();
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
        Schema::dropIfExists('reports');
    }
}
