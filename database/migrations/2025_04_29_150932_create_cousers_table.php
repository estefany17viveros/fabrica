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
        Schema::create('cousers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id')->unique();
            $table->unsignedBigInteger('training_center_id')->unique();
            $table->string('number');
            $table->integer('day');
           

            $table->timestamps();
              
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('set null');
              
            $table->foreign('training_center_id')->references('id')->on('training_centers')->onDelete('set null');
            
            


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cousers');
    }
};
