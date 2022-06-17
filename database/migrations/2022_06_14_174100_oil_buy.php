<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OilBuy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oilbuy', function (Blueprint $table) {
            $table->id();
            $table->string('oilName');
            $table->integer('liter');
            $table->string('serviceMan')->nullable();;
            $table->string('dateChangeOil')->nullable();
            $table->foreignId('custumer_id')->references('id')->on('customer')->onDelete('cascade');
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
        Schema::dropIfExists('oilbuy');
    }
}
