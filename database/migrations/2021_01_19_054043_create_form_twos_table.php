<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_twos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->string('course');
            $table->string('gender');
            $table->string('nationality');
            $table->string('spoken_language');
            $table->text('address');
            $table->mediumText('school');
            $table->string('class');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('father_contact_no');
            $table->string('father_whatsapp_no');
            $table->string('father_email');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('mother_contact_no');
            $table->string('mother_whatsapp_no');
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
        Schema::dropIfExists('form_twos');
    }
}
