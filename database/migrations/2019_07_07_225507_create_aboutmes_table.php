<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('heading',30)->default('About Me');
            $table->text('sub_heading');
            $table->text('paragraph');
            $table->string('image',50)->nullable();
            $table->string('name',30)->default('john doe');
            $table->string('occupation',30)->default('UI/UX designer');
            $table->string('birthdate',20)->default('02-09-1995');
            $table->string('phone',25)->default('0123456789');
            $table->string('email',30)->default('admin@gmail.com');
            $table->string('website',30)->default('www.example.com');
            $table->string('address',80)->default('12 Segun Bagicha, 10th Floor,Dhaka 1000, Bangladesh.');
            $table->string('happy_client',10)->default('150');
            $table->string('experience',10)->default('7');
            $table->string('award',10)->default('13');
            $table->string('project_done',10)->default('520');
            $table->string('slug',30)->default('djfsjdflsdodsfe');
            $table->integer('section_status')->default(1);
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
        Schema::dropIfExists('aboutmes');
    }
}
