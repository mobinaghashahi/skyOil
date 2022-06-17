<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('meliCode',10);
            $table->string('carTag');
            $table->integer('kilometerCurrent')->default(0);
            $table->integer('kilometerPrevious')->default(0);
            $table->integer('kilometerProposed')->default(0);
            $table->string('phoneNumber',11);
            $table->string('carType');
            $table->string('dateChangeOil')->nullable();
            $table->string('expirationDay')->nullable();
            $table->boolean('smsSent')->default(false);
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
        Schema::dropIfExists('customer');
    }
}
