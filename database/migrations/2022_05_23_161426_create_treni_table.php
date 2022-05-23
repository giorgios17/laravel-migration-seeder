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
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->date('data_partenza')->nullable($value = true);
            $table->time('orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->string('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->boolean(' in_orario');
            $table->boolean('cancellato');

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