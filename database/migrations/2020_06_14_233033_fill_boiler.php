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
            $table->integer('pressure')->nullable();
            $table->integer('coils_tempreture1')->nullable();
            $table->integer('coils_tempreture2')->nullable();
            $table->integer('coils_tempreture3')->nullable();
            $table->integer('coils_tempreture4')->nullable();
            $table->integer('coils_tempreture5')->nullable();
            $table->integer('coils_tempreture6')->nullable();
            $table->string('blowdown_working')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
        // Schema::rename(fill_boiler, fill_boilers);
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
