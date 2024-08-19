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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('location');
            $table->longText('description')->nullable();
            $table->string('apartment_type');
            $table->string('price');
            $table->string('governors_consent');
            $table->string('title');
            $table->string('type');
            $table->string('feature_1');
            $table->string('feature_2');
            $table->string('feature_3');
            $table->string('feature_4');
            $table->string('feature_5');
            $table->string('feature_6')->nullable();
            $table->string('feature_7')->nullable();
            $table->string('feature_8')->nullable();
            $table->string('feature_9')->nullable();
            $table->string('landmark_1')->nullable();
            $table->string('landmark_2')->nullable();
            $table->string('landmark_3')->nullable();
            $table->string('landmark_4')->nullable();
            $table->string('landmark_5')->nullable();
            $table->string('landmark_6')->nullable();
            $table->string('payment_plan')->nullable();
            $table->string('images_1')->nullable();
            $table->string('images_2')->nullable();
            $table->string('images_3')->nullable();
            $table->string('images_4')->nullable();
            $table->string('images_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
