<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conference_id')->index()->unsigned();
            $table->string('place');
            $table->string('time');
            $table->string('chairman');
            $table->string('secretary');
            $table->string('duration');
            $table->boolean('show_reg');
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
        Schema::dropIfExists('conference_infos');
    }
}
