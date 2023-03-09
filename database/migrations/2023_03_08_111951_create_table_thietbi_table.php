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
        Schema::create('thietbi', function (Blueprint $table) {
            $table->id();
            $table->string('mathietbi');
            $table->string('tenthietbi');
            $table->string('diachiip');
            $table->integer('statushd');
            $table->integer('statuskn');
            $table->string('dichvuketnoi');
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
        Schema::dropIfExists('thietbi');
    }
};
