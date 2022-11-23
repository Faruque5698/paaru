<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('members', function (Blueprint $table) {
      $table->bigIncrements('id');

      $table->string('title')->nullable();
      $table->string('name')->nullable();

      $table->timestamp('date_of_birth')->nullable();

      $table->string('bachelor_year')->nullable();
      $table->string('bachelor_roll')->nullable();
      $table->string('masters_year')->nullable();
      $table->string('masters_roll')->nullable();
      $table->string('mphil_year')->nullable();
      $table->string('mphil_roll')->nullable();
      $table->string('phd_year')->nullable();
      $table->string('phd_roll')->nullable();

      $table->string('m_location')->nullable();
      $table->string('m_country')->nullable();
      $table->string('m_post_code')->nullable();
      $table->integer('m_district')->nullable();
      $table->string('m_email')->nullable();
      $table->string('m_phone')->nullable();

      $table->string('p_location')->nullable();
      $table->string('p_country')->nullable();
      $table->string('p_post_code')->nullable();
      $table->integer('p_district')->nullable();

      $table->string('occupation')->nullable();
      $table->string('designation')->nullable();

      $table->string('name_of_spouse')->nullable();
      $table->integer('no_of_son')->nullable();
      $table->integer('no_of_daughter')->nullable();

      $table->integer('cat_of_member')->nullable();

      $table->integer('amount')->nullable();
      $table->string('mode_of_payment')->nullable();

      $table->timestamp('payment_date')->nullable();
      $table->string('transaction_id')->nullable();
      $table->string('bank_name')->nullable();
      $table->string('branch_name')->nullable();

      $table->string('image')->nullable();
      $table->string('signature')->nullable();

      $table->tinyInteger('publication_status')->default(0);
      $table->integer('created_by')->unsigned()->nullable();
      $table->integer('updated_by')->unsigned()->nullable();
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
    Schema::dropIfExists('members');
  }
}
