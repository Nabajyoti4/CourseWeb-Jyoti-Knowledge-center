<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmunationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immunations', function (Blueprint $table) {
            $table->id();
            $table->string('bcg');
            $table->string('dpt');
            $table->string('polio');
            $table->string('measles');
            $table->string('mmr');
            $table->string('dt');
            $table->string('hbv');
            $table->string('hib');
            $table->string('chicken');
            $table->string('typhoid');
            $table->string('hepatitis');
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
        Schema::dropIfExists('immunations');
    }
}
