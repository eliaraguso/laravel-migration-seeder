<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacchettiViaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacchetti_viaggio', function (Blueprint $table) {
            $table->id();
            $table->string('destinazione');
            $table->string('compagnia');
            $table->string('hotel');
            $table->tinyInteger('notti');
            $table->float('prezzo', 10, 2);
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
        Schema::dropIfExists('pacchetti_viaggio');
    }
}
