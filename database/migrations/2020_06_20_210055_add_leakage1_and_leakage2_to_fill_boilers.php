<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLeakage1AndLeakage2ToFillBoilers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fill_boilers', function (Blueprint $table) {
            $table->string('leakage1')->nullable();
            $table->string('leakage2')->nullable();
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
            $table->dropColumn(['leakage1',  'leakage2']);
        });
    }
}
