<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('events', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title')->nullable();
      $table->timestamp('date_time')->nullable();
      $table->text('description')->nullable();
      $table->timestamp('starting_time')->nullable();
      $table->timestamp('ending_time')->nullable();
      $table->string('place')->nullable();
      $table->text('location')->nullable();
      $table->string('image')->nullable();
      $table->tinyInteger('publication_status')->default(0)->unsigned();
      $table->tinyInteger('ticket_book')->default(0)->unsigned()->nullable();
      $table->integer('ticket_money')->unsigned()->nullable();
      $table->integer('created_by')->unsigned()->nullable();
      $table->integer('updated_by')->unsigned()->nullable();
      $table->integer('deleted_by')->unsigned()->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('events');
  }
}
