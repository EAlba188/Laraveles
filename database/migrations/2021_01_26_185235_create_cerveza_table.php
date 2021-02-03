<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCervezaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cerveza', function (Blueprint $table) {
            $table->id();
            $table->string('picture', 100);
            $table->string('brand', 20);
            $table->double('price');
            $table->string('type', 20);
            $table->integer('amount');
            $table->string('location', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cerveza');
    }
}
