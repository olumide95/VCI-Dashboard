<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('reports', function (Blueprint $table) {
            $table->boolean('is_file')->default(false);
            $table->string('report_file')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('reports', function (Blueprint $table) {
             $table->dropColumn('is_file');
             $table->dropColumn('report_file');
        });
    }
}
