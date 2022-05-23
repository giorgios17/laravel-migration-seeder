<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treni', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda');
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->string('Orario di partenza');
            $table->string('Orario di arrivo');
            $table->string('Codice Treno');
            $table->string('Numero carrozze');
            $table->string('In orario');
            $table->string('Cancellato');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treni');
    }
}