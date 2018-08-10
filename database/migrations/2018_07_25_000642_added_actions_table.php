<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function( Blueprint $table ){
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->integer('company_id')->unsigned()->nullable();
          $table->foreign('company_id')->references('id')->on('companies');
          $table->integer('cafe_id')->unsigned()->nullable();
          $table->foreign('cafe_id')->references('id')->on('cafes');
          $table->integer('status');
          $table->integer('processed_by')->unsigned()->nullable();
          $table->foreign('processed_by')->references('id')->on('users');
          $table->dateTime('processed_on')->nullable();
          $table->string('type');
          $table->text('content');
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
        Schema::drop('actions');
    }
}
