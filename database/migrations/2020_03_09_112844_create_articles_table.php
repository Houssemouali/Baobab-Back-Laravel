<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('status');
            $table->timestamp('createdAt');
            $table->unsignedInteger('journalist_id')->nullable();
            $table->string('link');
            $table->string('description');
            $table->string('caption');
            $table->foreign('journalist_id')->references('id')
                ->on('journalistes')->onDelete('cascade');
            });
//        Schema::table('articles',function(Blueprint $table){
//            $table->foreign('journalist_id')->references('id')
//                ->on('journalistes')->onDelete('cascade');
//        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
