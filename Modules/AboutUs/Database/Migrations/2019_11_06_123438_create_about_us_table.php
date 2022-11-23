<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('about_us', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name')->nullable();
      $table->string('slogan')->nullable();
      $table->text('about_bls')->nullable();
      $table->string('image')->nullable();
      $table->string('activity_name')->nullable();
      $table->text('activity_message')->nullable();
      $table->integer('created_by')->unsigned()->nullable();
      $table->integer('updated_by')->unsigned()->nullable();
      $table->tinyInteger('publication_status')->default(1)->unsigned();
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
    Schema::dropIfExists('about_us');
  }
}
