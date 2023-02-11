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
        Schema::create('contact_types', function (Blueprint $table) {
            $table->id();
            $table->string('item',64);
            $table->timestamps();
        });

        DB::table('contact_types')
        ->insert(
            array(
                array('item' => 'Tel. privat'),
                array('item' => 'Tel. dienstlich'),
                array('item' => 'Mobil'),
                array('item' => 'Fax'),
                array('item' => 'Email')
            )
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_types');
    }
};
