<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadforms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('user_id');
            $table->string('title');
            $table->string('header');
            $table->string('subheader');
            $table->string('form_fields');
            $table->string('button_text');
            $table->string('button_color');
            $table->string('image');
            $table->string('ty_header');
            $table->string('ty_subheader');
            $table->string('magnet');

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
        Schema::dropIfExists('leadforms');
    }
}
