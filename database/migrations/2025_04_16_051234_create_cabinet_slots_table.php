<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cabinet_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cabinet_id');
            $table->unsignedBigInteger('battery_id');
            $table->integer('door_id');
            $table->string('door_status'); // e.g., Open, Closed

            $table->timestamps();

            $table->foreign('cabinet_id')->references('cabinet_id')->on('cabinets')->onDelete('cascade');
            $table->foreign('battery_id')->references('battery_id')->on('batteries')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('cabinet_slots');
    }
};
