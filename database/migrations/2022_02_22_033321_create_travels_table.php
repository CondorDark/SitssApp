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
        Schema::create('travels', function (Blueprint $table) {

            $table->id('id_travel');
            $table->string('co_travel')->unique();

            $table->float('nu_Kilometer', 3, 2);

            $table->unsignedBigInteger('co_origin');
            $table->foreign('co_origin')->references('id_station')->on('stations');

            $table->unsignedBigInteger('co_destiny');
            $table->foreign('co_destiny')->references('id_station')->on('stations');

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
        Schema::dropIfExists('travels');
    }
};
