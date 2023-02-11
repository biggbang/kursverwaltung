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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('coursename', 50);
            $table->string('skills', 250)->nullable();
            $table->string('tools', 250)->nullable();
            $table->string('material', 250)->nullable();
            $table->decimal('charge',4,2);
            $table->tinyInteger('duration');
            $table->tinyInteger('max_participants');
            $table->tinyInteger('min_participants');
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
        Schema::dropIfExists('courses');
    }
};
