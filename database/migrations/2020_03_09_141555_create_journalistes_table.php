<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalistes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('status');
            $table->string('actual_entreprise');
            $table->integer('xp_number');
            $table->mediumText('motivation_text');
            $table->integer('user_id')->unsigned();
            $table->binary('cv')->nullable();
            $table->binary('portefolio')->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journalistes');
    }
}
