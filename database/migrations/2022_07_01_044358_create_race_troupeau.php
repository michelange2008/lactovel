<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceTroupeau extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_troupeau', function (Blueprint $table) {
            $table->foreignId('race_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('troupeau_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_troupeau');
    }
}
