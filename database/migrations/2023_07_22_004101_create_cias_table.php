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
        Schema::create('cias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bpmm_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('user_created')->nullable();
            $table->unsignedBigInteger('user_updated')->nullable();
            $table->timestamps();

            $table->foreign('user_created')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_updated')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bpmm_id')->references('id')->on('bpmms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cias');
    }
};
