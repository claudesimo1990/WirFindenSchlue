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

            $table->string('Bankname')->nullable();
            $table->string('bic')->nullable();
            $table->string('iban')->nullable();
            $table->boolean('paypal')->default(false)->nullable();

            $table->string('anrede_2')->nullable();
            $table->string('vorname_2')->nullable();
            $table->string('nachname_2')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('email_2')->nullable();
            $table->string('stadt_2')->nullable();
            $table->string('strasse_2')->nullable();
            $table->string('plz_2')->nullable();
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
