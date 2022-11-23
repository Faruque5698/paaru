<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisoryCommitteesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('advisory_committees', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('member_id')->unsigned();
      $table->integer('order')->unsigned()->nullable();
      $table->integer('created_by')->unsigned();
      $table->integer('updated_by')->unsigned();
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
    Schema::dropIfExists('advisory_committees');
  }
}
