<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBoiler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fill_boilers', function (Blueprint $table) {
            $table->unsignedInteger('pump_id');
            $table->string('user_name');
            $table->string('boiler');
            $table->string('pressure');
            $table->string('coils_tempreture1');
            $table->string('coils_tempreture2');
            $table->string('coils_tempreture3');
            $table->string('coils_tempreture4');
            $table->string('coils_tempreture5');
            $table->string('coils_tempreture6');
            $table->string('blowdown_working');
            $table->string('notes');
            $table->timestamps();
        });
        Schema::rename(fill_boiler, fill_boilers);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
