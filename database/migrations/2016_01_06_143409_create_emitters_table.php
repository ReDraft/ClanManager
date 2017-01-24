<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('emitters');

        Schema::create('emitters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clan_id')->unsigned();
            $table->integer('name')->nullable();
            $table->smallInteger('number')->unsigned();
            $table->smallInteger('x');
            $table->smallInteger('y');

            // add unique
            $table->unique(array('x', 'y'));

            // add foreign keys
            $table->foreign('clan_id')->references('id')->on('clans')
                ->onDelete('cascade');

            $table->softDeletes();
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
        Schema::drop('emitters');
    }
}
