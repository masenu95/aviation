<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTobaccoproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tobaccoproducts', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('datestopped')->default('no');
            $table->string('state');
            $table->string('amount');
            $table->string('years');
            $table->integer('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tobaccoproducts');
    }
}
