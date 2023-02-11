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
        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->biginteger('personID')->unsigned();
            $table->index('personID');
            $table->foreign('personID')->references('id')->on('persons')->onDelete('cascade');
            $table->biginteger('courseID')->unsigned();
            $table->index('courseID');
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');
            $table->string('comment', 250)->nullable();
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
        Schema::dropIfExists('interests');
    }
};
