<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->increments('job_id');
            $table->integer('employer_id')->unsigned()->nullable();
            $table->foreign('employer_id')->references('employer_id')->on('employers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_title');
            $table->longText('job_description');
            $table->integer('no_of_vacancy');
            $table->longText('skills');
            $table->longText('duties_responsibility');
            $table->integer('job_level_id')->unsigned();
            $table->foreign('job_level_id')->references('job_level_id')->on('joblevels')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('job_type_id')->unsigned();
            $table->foreign('job_type_id')->references('job_type_id')->on('jobtypes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('job_category_id')->unsigned();
            $table->foreign('job_category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('experience');
            $table->longText('education');
            $table->integer('currency_id')->unsigned()->nullable();
            $table->foreign('currency_id')->references('currency_id')->on('currencies')->onUpdate('cascade')->onDelete('cascade');
            $table->float('salary');
            $table->dateTime('job_posted_date');
            $table->dateTime('valid_date');
            $table->enum('status',['expired','active']);
            $table->integer('viewed');
            $table->integer('applicants');
            $table->integer('location_id')->unsigned()->nullable();
            $table->foreign('location_id')->references('location_id')->on('joblocations')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('job_vacancies');
    }
}
