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
        Schema::create('extras', function (Blueprint $table) {
            $table->id();
            $table->biginteger('participationID')->unsigned();
            $table->index('participationID');
            $table->foreign('participationID')->references('id')->on('participations')->onDelete('cascade');
            $table->string('item', 100);
            $table->date('date')->nullable();
            $table->decimal('charge', 5, 2);
            $table->biginteger('supplierID')->unsigned();
            $table->index('supplierID');
            $table->foreign('supplierID')->references('id')->on('persons');
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
        Schema::dropIfExists('extras');
    }
};
