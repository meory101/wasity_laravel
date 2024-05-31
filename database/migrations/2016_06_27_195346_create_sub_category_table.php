<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sub_category', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image_url');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->timestamps();
        });
     
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_category');
    }
};
