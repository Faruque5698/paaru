<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenownedAlumniMembersMoreImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renowned_alumni_members_more_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('re_alumni_member_id')->unsigned();
            $table->string('re_members_more_image')->nullable();
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
        Schema::dropIfExists('renowned_alumni_members_more_images');
    }
}
