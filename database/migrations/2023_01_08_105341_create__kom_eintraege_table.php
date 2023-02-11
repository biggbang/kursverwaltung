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
        Schema::create('comm_items', function (Blueprint $table) {
            $table->id();
            $table->biginteger('PersonID')->unsigned();
            $table->index('PersonID');
            $table->foreign('PersonID')->references('id')->on('persons')->onDelete('cascade');
            $table->biginteger('KontaktartID')->unsigned();
            $table->index('KontaktartID');
            $table->foreign('KontaktartID')->references('id')->on('contact_types');
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
        Schema::dropIfExists('comm_items');
    }
};
