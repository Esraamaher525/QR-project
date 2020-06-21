<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStackTemperatureToFillBoilers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fill_boilers', function (Blueprint $table) {
            $table->integer('stack_temperature')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fill_boilers', function (Blueprint $table) {
            $table->dropColumn(['stack_temperature']);
        });
    }
}
