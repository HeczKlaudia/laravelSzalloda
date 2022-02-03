<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendegs', function (Blueprint $table) {
            //$table->id();
            $table->increments('vazon');
            $table->string('vnev', 45);
            $table->string('vcim', 55);
            $table->string('vutlevelszam', 10);
            $table->string('vtel', 12);
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
        Schema::dropIfExists('vendegs');
    }
}
