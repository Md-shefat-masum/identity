<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolioimages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image',30)->nullable();
            $table->string('description',100)->nullable();
            $table->string('category',100)->nullable();
            $table->string('slug',35)->default('sdfdsfvdff');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('portfolioimages');
    }
}
