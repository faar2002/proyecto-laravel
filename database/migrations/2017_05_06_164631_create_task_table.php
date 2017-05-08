<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('users_id');
            $table->string('title', 100);
            $table->mediumtext('description');
            $table->boolean('status');
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->integer('many_days');
            
            $table->timestamps(); // create_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task');
    }
}
