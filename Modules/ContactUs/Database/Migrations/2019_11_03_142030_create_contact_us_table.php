<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('contact_us', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('mobile')->nullable();
      $table->string('phone')->nullable();
      $table->string('email')->nullable();
      $table->string('mail')->nullable();
      $table->string('place')->nullable();
      $table->string('location')->nullable();
      $table->text('geo_location')->nullable();
      $table->tinyInteger('publication_status')->default(0)->unsigned();
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
    Schema::dropIfExists('contact_us');
  }
}
