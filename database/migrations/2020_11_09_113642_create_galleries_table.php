<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * target
         * 0 = default
         * 1 = profile
         * 2 = study program
         * 3 = agenda
         * 4 = employees
         */
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('target')->default(0);
            $table->bigInteger('type')->default(0);
            $table->string('url');
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
        Schema::dropIfExists('galleries');
    }
}
