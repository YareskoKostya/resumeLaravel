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
            for ($i = 1; $i <= 3; $i++){
                $table->date("datebeginstudy$i");
                $table->date("dateendstudy$i");
                $table->string("studyname$i");
                $table->string("proffessionstudy$i");
                $table->string("doctor$i");
            }
            for ($j = 1; $j <= 3; $j++){
                $table->date("datebeginwork$j");
                $table->date("dateendwork$j");
                $table->string("workname$j");
                $table->string("proffessionwork$j");
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
