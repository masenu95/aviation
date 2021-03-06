<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urinals', function (Blueprint $table) {
            $table->id();
            $table->string('ph');
            $table->string('sugar');
            $table->string('protein');
            $table->string('apperance');
            $table->string('blood');
            $table->integer('doctor_id')->references('id')->on('doctors');
            $table->integer('applicant_id')->references('id')->on('applicants');
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
        Schema::dropIfExists('urinals');
    }
}
