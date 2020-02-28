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
            $table->string('owner');
            $table->string('inspection_date');
            $table->string('inspection_time')->nullable();
            $table->string('contact_phone');
            $table->string('address');
            $table->string('email');
            $table->string('color');
            $table->string('chasis_number');
            $table->string('engine_number');
            $table->string('odometer_reading');
            $table->json('body_integrity');
            $table->json('vehicle_information');
            $table->json('drivers_controls');
            $table->json('lighting_electric');
            $table->json('other_details');
            $table->string('inspection_result');
            $table->string('inspected_by');
            $table->string('signature');
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
