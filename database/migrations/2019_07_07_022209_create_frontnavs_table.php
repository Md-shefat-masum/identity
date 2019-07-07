<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontnavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontnavs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20)->nullable();
            $table->string('slug',31)->nullable();
            $table->string('nid',31)->nullable();
            $table->integer('integer')->default(1);
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
        Schema::dropIfExists('frontnavs');
    }
}
