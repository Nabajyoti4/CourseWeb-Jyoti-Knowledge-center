<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medical_id')->index();
            $table->unsignedBigInteger('immunation_id')->index();
            $table->string('admission_sought');
            $table->string('batch');
            $table->date('dob');
            $table->string('name');
            $table->string('image');
            $table->string('father_name')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('father_company')->nullable();
            $table->string('father_qualification')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_profession')->nullable();
            $table->string('mother_company')->nullable();
            $table->string('mother_qualification')->nullable();
            $table->longText('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('schooling')->nullable();
            $table->longText('specify')->nullable();
            $table->string('toilet')->nullable();
            $table->longText('siblings')->nullable();
            $table->longText('strength')->nullable();
            $table->longText('development')->nullable();
            $table->longText('activities')->nullable();
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
        Schema::dropIfExists('students');
    }
}
