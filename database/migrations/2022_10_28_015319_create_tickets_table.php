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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('typeTicket',10);
            $table->unsignedBigInteger('idUserPassenger');
            $table->foreign('idUserPassenger')->references('idUserk')->on('passengers')->onDelete('cascade');
            $table->unsignedBigInteger('idTravel');
            $table->foreign('idTravel')->references('id')->on('travel')->onDelete('cascade');
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
        Schema::dropIfExists('tickets');
    }
};
