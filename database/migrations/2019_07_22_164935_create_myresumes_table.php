<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyresumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myresumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section_name',100)->nullable();
            $table->string('course_heading',100)->nullable();
            $table->string('course_sub_heading',100)->nullable();
            $table->text('course_details');
            $table->string('start_date',100)->nullable();
            $table->string('end_date',100)->nullable();
            $table->string('slug',35)->default('sasdfdfdsfvdff');
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
        Schema::dropIfExists('myresumes');
    }
}
