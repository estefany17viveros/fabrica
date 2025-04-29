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
        Schema::create('couser_teacher', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('couser_id')->unique();
            $table->unsignedBigInteger('teacher_id')->unique();
            $table->timestamps();

            
            $table->foreign('couser_id')->references('id')->on('cousers')->onDelete('cascade');
            
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couser_teacher');
    }
};
