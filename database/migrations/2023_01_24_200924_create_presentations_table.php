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
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();
            $table->biginteger('courseID')->unsigned();
            $table->index('courseID');
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');
            $table->string('event_name', 50);
            $table->date('start_date');
            $table->date('end_date');
            $table->time('dailygrid_start');
            $table->time('dailygrid_end');
            $table->time('starttime_firstday')->nullable();
            $table->time('endtime_lastday')->nullable();
            $table->tinyInteger('participants_qty');
            $table->decimal('charge', 5, 2);
            $table->enum('status', array('created', 'active', 'canceled', 'performed'))->default('created');
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
        Schema::dropIfExists('presentations');
    }
};
