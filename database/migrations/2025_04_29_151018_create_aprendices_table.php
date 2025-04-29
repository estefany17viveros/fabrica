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
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('couser_id')->unique();
            $table->unsignedBigInteger('computer_id')->unique();
            $table->string('name');
            $table->string('gmail');
            $table->integer('cell');
            $table->timestamps();
            $table->foreign('couser_id')->references('id')->on('cousers')->onDelete('set null');
              
            $table->foreign('computer_id')->references('id')->on('computers')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices');
    }
};
