<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('activities', function (Blueprint $table) {
      $table->bigIncrements('id');

      $table->string('title')->nullable();
      $table->text('description')->nullable();
      $table->date('date_time')->nullable();
      $table->integer('activity_type')->nullable();
      $table->string('image')->nullable();
      $table->tinyInteger('publication_status')->default(1);
      $table->integer('created_by')->unsigned()->nullable();
      $table->integer('updated_by')->unsigned()->nullable();
      $table->integer('deleted_by')->unsigned()->nullable();

      $table->softDeletes();
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
    Schema::dropIfExists('activities');
  }
}
