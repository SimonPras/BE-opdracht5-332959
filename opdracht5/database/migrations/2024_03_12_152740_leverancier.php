<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 200);
            $table->string('contactPersoon', 200);
            $table->string('leverancierNummer', 200);
            $table->string('mobiel', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leveranciers');
    }
};
