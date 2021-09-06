<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleveursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleveurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('address_1', 191)->nullable();
            $table->string('address_2', 191)->nullable();
            $table->string('cp', 5)->nullable();
            $table->string('commune', 191)->nullable();
            $table->string('tel', 10)->nullable();
            $table->float('lat', 8, 6);
            $table->float('long', 8, 6);
            $table->year('installation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleveurs');
    }
}
