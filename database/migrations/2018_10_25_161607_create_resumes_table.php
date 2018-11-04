<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->date('birthdate');
            $table->string('country');
            $table->string('tel');
            $table->string('email');
            $table->string('address');
            for ($i = 0; $i < 3; $i++){
                $table->date("datebeginstudy{$i}")->nullable();
                $table->date("dateendstudy{$i}")->nullable();
                $table->string("studyname{$i}")->nullable();
                $table->string("professionstudy{$i}")->nullable();
                $table->string("doctor{$i}")->nullable();
            }
            for ($j = 0; $j < 3; $j++){
                $table->date("datebeginwork{$j}")->nullable();
                $table->date("dateendwork{$j}")->nullable();
                $table->string("workname{$j}")->nullable();
                $table->string("professionwork{$j}")->nullable();
            }
            $table->string('interests');
            $table->binary('photo');
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
        Schema::dropIfExists('resumes');
    }
}
