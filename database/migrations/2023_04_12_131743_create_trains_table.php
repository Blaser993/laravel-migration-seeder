<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('codice_treno',12);
            $table->string('azienda',50);
            $table->string('stazione_partenza' 100);
            $table->string('stazione_arrivo' 100);
            $table->string('orario_partenza' 50);
            $table->string('orario_arrivo' 50);
            $table->unsignedSmallInteger('numero_carrozze');
            $table->boolean('delay')->default("in-time");
            $table->boolean('deleted');

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
        Schema::dropIfExists('trains');
    }
};
