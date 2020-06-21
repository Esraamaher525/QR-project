<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPumpNo1AndPumpNo2ToFillBoilers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fill_boilers', function (Blueprint $table) {
            $table->string('pump_no1')->nullable();
            $table->string('pump_no2')->nullable();
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
            $table->dropColumn(['pump_no1',  'pump_no2']);
        });
    }
}
