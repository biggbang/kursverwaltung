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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->integer('salutationID')->unsigned();
            $table->index('salutationID');
            $table->foreign('salutationID')->references('id')->on('salutations');
            $table->string('lastname', 50);
            $table->string('name', 50);
            $table->string('organisation', 100)->nullable();
            $table->string('street', 50);
            $table->string('ZIP_code', 10);
            $table->string('city', 50);
            $table->string('comment', 255)->nullable();
            $table->date ('customer_since')->nullable();
            $table->date('supplier_since')->nullable();
            $table->date('instructor_since')->nullable();
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
        Schema::dropIfExists('persons');
    }
};
