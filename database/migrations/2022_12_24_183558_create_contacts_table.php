<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->instanceof('3');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('addres');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instgram');
            $table->string('skybe');
            $table->string('linkedin');
            $table->string('map');
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
        Schema::dropIfExists('contacts');
    }
}