<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('lat');
            $table->double('long');
            $table->string('image_url')->nullable();
            $table->bigInteger('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owner')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
