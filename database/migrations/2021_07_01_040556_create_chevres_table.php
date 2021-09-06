<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChevresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chevres', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 191);
            $table->string('name', 191)->nullable()->default('null');
            $table->foreignId('troupeau_id')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('race_id')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->boolean('isLactodouce')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chevres');
    }
}
