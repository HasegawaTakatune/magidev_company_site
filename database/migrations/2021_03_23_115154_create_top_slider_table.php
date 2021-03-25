<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopSliderTable extends Migration
{
    public function up()
    {
        Schema::create('top_slider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->string('url');
        });
    }

    public function down()
    {
        Schema::dropIfExists('top_slider');
    }
}
