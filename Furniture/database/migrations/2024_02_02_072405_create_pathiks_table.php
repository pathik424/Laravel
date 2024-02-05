<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pathiks', function (Blueprint $table) {
            $table->id();


            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->string('image');
            $table->boolean('visible')->default(false)->nullable()->comment('0 = hidden 1 = visible');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pathiks');
    }
};
