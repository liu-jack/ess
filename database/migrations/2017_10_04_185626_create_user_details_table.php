<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('f_name',50)->nullable()->index();
            $table->string('l_name',50)->nullable()->index();
            $table->string('country',45)->nullable()->index();
            $table->char('gender',10)->nullable()->index();
            $table->integer('age')->unsigned()->nullable()->index();
            $table->integer('user_id')->unsigned();
            // user_id set it as FK..
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
        Schema::dropIfExists('user_details');
    }
}
