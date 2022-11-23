<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('journals', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->text('authors')->nullable();
      $table->text('title');
      $table->text('keywords');
      $table->text('abstract');
      $table->string('pdf_file');
      $table->string('year')->nullable();
      $table->timestamp('publication_date')->nullable();
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
    Schema::dropIfExists('journals');
  }
}
