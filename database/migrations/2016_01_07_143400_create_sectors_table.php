<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Eloquent\Models\Sector;
use \App\Eloquent\Models\User;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sectors');

        Schema::create('sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->enum('type', [Sector::TYPE_ALL, Sector::TYPE_DEF, Sector::TYPE_OFF])->nullable()->default(NULL);
            $table->integer('x');
            $table->integer('y');
            $table->text('notice')->nullable()->default(NULL);
            $table->string('lineId', 100)->nullable()->default(NULL);
            $table->string('whatsapp', 30)->nullable()->default(NULL);
            //$table->string('rank', 50)->default(Sector::RANK_COMMANDER);
            $table->integer('clan_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();


            // add unique
            $table->unique(array('x', 'y'));

            // add foreign keys
            //$table->foreign('rank')->references('id')->on('roles')          // prevent delete sector if rank delete, ranks ar not deletable
            //    ->onDelete('restrict');
            $table->foreign('clan_id')->references('id')->on('clans')       // prevent deleting sector if clan delete
                ->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')       // delete sector if user delete
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sectors');
    }
}
