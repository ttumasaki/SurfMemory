<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('point',30);
            $table->integer('size');
            $table->integer('w_condition');
            $table->integer('number');
            $table->integer('state');
            $table->integer('direction');
            $table->integer('people');
            $table->float('temperature',2,1);
            $table->binary('image');
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
        //
    }
}
