<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->longText('balls')->nullable();
            $table->char('state_game', 1);  // Indica si el juego ya ha sido jugado o no. Por ejemplo: ('P': jugando|playing), ('F': terminado:finished)
            $table->unsignedTinyInteger('gametype_id');
            $table->timestamps();

            $table->foreign('gametype_id')->references('id')->on('gametype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
