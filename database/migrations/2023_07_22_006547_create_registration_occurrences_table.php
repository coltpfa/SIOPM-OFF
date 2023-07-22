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
        Schema::create('registration_occurrences', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('time')->nullable(false);
            $table->string('requester')->nullable();
            $table->string('anonymous')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('reference')->nullable();
            $table->unsignedBigInteger('bpmm_id')->nullable();
            $table->unsignedBigInteger('natureOfOccurrence_id')->nullable(false);
            $table->string('policeInDanger')->nullable(false)->default('0');
            $table->string('cellularImeiNumber')->nullable();
            $table->string('cellularModel')->nullable();
            $table->string('cellularBrand')->nullable();
            $table->string('cellularStatus')->nullable();
            $table->string('vehiclePlate')->nullable();
            $table->string('vehicleBrand')->nullable();
            $table->string('vehicleModel')->nullable();
            $table->string('vehicleColor')->nullable();
            $table->string('vehicleChassis')->nullable();
            $table->string('vehicleStatus')->nullable();
            $table->string('peopleRg')->nullable();
            $table->string('peopleName')->nullable();
            $table->string('peopleStatus')->nullable();
            $table->string('status')->nullable(false)->default('0');
            $table->string('view')->nullable(false)->default('0');
            $table->string('situation')->nullable(false)->default('0');
            $table->string('observation')->nullable();
            $table->string('attendance')->nullable();
            $table->string('log')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(false);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bpmm_id')->references('id')->on('bpmms')->onDelete('cascade');
            $table->foreign('natureOfOccurrence_id')->references('id')->on('nature_of_occurrences')->onDelete('cascade');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_occurrences');
    }
};
