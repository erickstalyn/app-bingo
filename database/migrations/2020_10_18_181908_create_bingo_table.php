<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBingoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bingo', function (Blueprint $table) {
            $table->increments('id');   
            $table->char('code')->unique();
            $table->string('gamer', 200)->nullable();
            $table->longText('balls')->nullable();
            $table->char('state_balls', 1)->default('E'); //E -> Empty (VACIO) | F -> Full (LLENO)
            $table->char('state_transaction', 1)->default('U'); //S -> Sold (Vendido) | U ->Unsold (Sin vender)
            $table->char('state_game', 1)->default('E'); //E -> ENABLED (HABILITADO) | D -> DISABLED (DESHABILITADO)
            $table->integer('responsible_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('responsible_id')->references('id')->on('person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bingo');
    }
}
