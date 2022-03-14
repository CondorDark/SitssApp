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
        Schema::create('safras', function (Blueprint $table) {
            $table->id('id_safra');
            $table->date('fe_safra');
            $table->time('hr_safra');
            $table->string('co_travel');
            $table->integer('nu_mobilization');
            $table->integer('nu_return')->nullable();
            $table->unsignedBigInteger('co_unit');
            $table->foreign('co_unit')->references('id_unit')->on('units');
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
        Schema::dropIfExists('safras');
    }
};
