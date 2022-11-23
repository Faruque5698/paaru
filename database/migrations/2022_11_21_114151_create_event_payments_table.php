<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('present_affiliation');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('passing_type');
            $table->string('year');
            $table->string('session');
            $table->string('paaru_type');
            $table->string('child_number_10');
            $table->string('child_10_total_amount');
            $table->string('child_number_5_to_10');
            $table->string('child_5_to_10_total_amount');
            $table->string('child_number_5');
            $table->string('child_5_total_amount');
            $table->string('existing_life_fee');
            $table->string('annual_member_fee');

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
        Schema::dropIfExists('event_payments');
    }
}
