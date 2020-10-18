<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ball', function (Blueprint $table) {
            $table->increments('id');
            $table->char('type', 1); //B | I | N | G |O
            $table->string('number', 2); //Del 1 al 75
            $table->boolean('state'); // TRUE: ACTTIVO | FALSE: DESACTIVADO
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ball');
    }
}
