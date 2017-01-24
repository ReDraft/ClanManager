<?php

use App\Eloquent\Models\Clan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name')->unique();
            $table->text('description')->nullable();
            $table->text('important')->nullable();
            $table->binary('logo')->nullable();
            $table->enum('type', [Clan::TYPE_MAIN, Clan::TYPE_WING])->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('clan_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')->onUpdate('restrict');     // nothing delete only if the old cl stop playing


            $table->foreign('clan_id')->references('id')->on('clans')
                ->onDelete('restrict')->onUpdate('restrict');     // nothing delete only if tha main clan closed
        });

        DB::statement('ALTER TABLE `clans` MODIFY `logo` MEDIUMBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clans');
    }
}
