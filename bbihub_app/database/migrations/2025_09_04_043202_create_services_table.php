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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workshop_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->enum('vehicle_type', ['car', 'motorcycle'])->default('motorcycle');
            $table->string('vehicle_models');
            $table->string('license_plate');
            $table->enum('service_category', ['maintenance','repair','sparepart replacement','emergency'])->default('maintenance');
            $table->enum('service_mode', ['on demand','booking'])->default('on demand');
            $table->enum('service_option', ['on site','in workshop'])->default('on site');
            $table->text('problem_description');
            $table->string('address');
            $table->string('image');
            $table->enum('approval_status', ['accepted','cancelled'])->default('accepted');
            $table->enum('work_status', ['pending','in progress','completed'])->default('pending');
            $table->dateTime('scheduled_at')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
