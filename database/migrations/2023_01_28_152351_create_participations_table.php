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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->biginteger('personID')->unsigned();
            $table->index('personID');
            $table->foreign('personID')->references('id')->on('persons')->onDelete('cascade');
            $table->biginteger('presentationID')->unsigned();
            $table->index('presentationID');
            $table->foreign('presentationID')->references('id')->on('presentations')->onDelete('cascade');
            $table->timestamps();
            $table->string('comment', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
};
