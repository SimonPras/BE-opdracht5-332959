<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('productPerLeveranciers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->date('datumLevering');
            $table->integer('aantal');
            $table->date('datumEerstVolgendeLevering')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productPerLeveranciers');
    }
};
