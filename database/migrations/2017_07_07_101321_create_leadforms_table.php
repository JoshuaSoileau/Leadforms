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
            $table->string('header')->nullable();
            $table->string('subheader')->nullable();
            $table->string('form_fields')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_color')->nullable();
            $table->string('image')->nullable();
            $table->string('ty_header')->nullable();
            $table->string('ty_subheader')->nullable();
            $table->string('magnet')->nullable();

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
