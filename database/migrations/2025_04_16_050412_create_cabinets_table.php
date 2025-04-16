<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cabinets', function (Blueprint $table) {
            $table->id('cabinet_id');
            $table->string('status');
            $table->integer('battery_count');
            $table->string('lat_long');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('cabinets');
    }
};
