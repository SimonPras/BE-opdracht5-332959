<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('magazijns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->references('id')->on('products');
            $table->string('verpakkingsEenheid', 200)->nullable();
            $table->integer('aantalAanwezig')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('magazijns');
    }
};
