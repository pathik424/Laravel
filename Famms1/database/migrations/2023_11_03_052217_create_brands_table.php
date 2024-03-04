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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cat_id');

            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->boolean('visible')->default(false)->nullable()->comment('0 = hidden 1 = visible');

            $table->foreign('cat_id')->references('id')->on('Categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
