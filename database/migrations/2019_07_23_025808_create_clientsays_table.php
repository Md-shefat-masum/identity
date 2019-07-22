<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientsays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comment')->nullable();
            $table->string('name',100)->nullable();
            $table->string('occupation',100)->nullable();
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
        Schema::dropIfExists('clientsays');
    }
}
