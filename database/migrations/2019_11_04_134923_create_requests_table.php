<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('organisation_id');
            $table->foreign('organisation_id')->references('id')->on('users');
            $table->string('type');
            $table->json('details');
            $table->string('agreed_inspection_date');
            $table->string('agreed_inspection_time')->nullable();
            $table->string('contact_person');
            $table->string( 'contact_phone');
            $table->string( 'requester');
            $table->string( 'requester_email');
            $table->string( 'status')->default('pending');
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
        Schema::dropIfExists('requests');
    }
}
