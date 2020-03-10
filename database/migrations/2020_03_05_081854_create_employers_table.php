<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('employer_id');
            $table->string('company_name');
            $table->string('company_email');
            $table->integer('industry_id')->unsigned()->nullable();
            $table->foreign('industry_id')->references('industry_id')->on('employer_industries')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('location');
            $table->string('primary_contact_no');
            $table->string('secondary_contact_no');
            $table->string('username');
            $table->string('password');
            $table->enum('status',['pending','suspended','active']);
            $table->string('logo');
            $table->integer('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('packages_id')->on('company_packages')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('package_activated');
            $table->dateTime('package_expired');
            $table->integer('viewed');
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
        Schema::dropIfExists('employers');
    }
}
