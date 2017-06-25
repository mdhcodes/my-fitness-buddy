<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            // https://laravel.com/docs/4.2/schema
            // When creating a foreign key that references an incrementing integer, remember to always make the foreign key column unsigned.
            // https://stackoverflow.com/questions/3895692/what-does-unsigned-in-mysql-mean-and-when-to-use-it
            // https://dev.mysql.com/doc/refman/5.7/en/mysql-indexes.html
            $table->integer('user_id')->unsigned()->index();
            $table->string('name');
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
        Schema::dropIfExists('meals');
    }
}
