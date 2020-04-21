<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('anrede');
            $table->string('vorname');
            $table->string('nachname');
            $table->string('email');
            $table->string('phone');
            $table->string('StraßeHausnummer');
            $table->string('Ort');
            $table->string('PLZ');
            $table->string('farbe');
            $table->string('vorname_2');
            $table->string('nachname_2');
            $table->string('phone_2');
            $table->string('anrede_2');
            $table->string('email_2');
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
        Schema::dropIfExists('orders');
    }
}
