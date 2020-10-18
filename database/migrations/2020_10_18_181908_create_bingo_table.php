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
            $table->char('code')->primary();
            $table->string('gamer', 200);
            $table->longText('balls');
            $table->char('state_balls', 1); //E -> Empty (VACIO) | F -> Full (LLENO)
            $table->char('state_transaction', 1); //S -> Sold (Vendido) | U ->Unsold (Sin vender)
            $table->char('state_game', 1); //E -> ENABLED (HABILITADO) | D -> DISABLED (DESHABILITADO)

            $table->integer('responsible_id')->unsigned();
            $table->foreign('responsible_id')->references('id')->on('person');

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
        Schema::dropIfExists('bingo');
    }
}
