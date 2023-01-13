<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('graduation_college_name');
            $table->string('graduation_college_location');
            $table->string('graduation_field_of_study');
            $table->string('graduation_cgpa');
            $table->string('graduation_college_start_year');
            $table->string('graduation_college_end_year');
            $table->string('hsc_college_name');
            $table->string('hsc_college_location');
            $table->string('hsc_field_of_study');
            $table->string('hsc_college_start_year');
            $table->string('hsc_college_end_year');
            $table->string('ssc_school_name');
            $table->string('ssc_school_location');
            $table->string('ssc_field_of_study');
            $table->string('ssc_school_start_year');
            $table->string('ssc_school_end_year');
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
        Schema::dropIfExists('education');
    }
};
