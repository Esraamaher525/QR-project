<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillPump extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fill_pumps', function (Blueprint $table) {
            $table->unsignedInteger('pump_id');
            $table->string('user_name');
            $table->string('H1');
            $table->string('H2');
            $table->string('H3');
            $table->string('V1');
            $table->string('V2');
            $table->string('V3');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
        // Schema::rename(fill-pump, fill_pumps);
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fill_pumps');

    }
}
