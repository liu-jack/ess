<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazineLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazine_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('magazine_id')->unsigned();
            //magazine_id set it as FK..
            $table->foreign('magazine_id')->references('id')->on('magazine')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            //user_id set it as FK..
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->char('status',2)->default('AC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magazine_likes');
    }
}
