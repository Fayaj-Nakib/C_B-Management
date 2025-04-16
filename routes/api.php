<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatteryController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\CabinetSlotController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);
 // Ensure this class exists in the specified namespace

Route::get('batteries', [BatteryController::class, 'index']);
Route::get('batteries/{battery_id}', [BatteryController::class, 'show']);
Route::get('cabinets', [CabinetController::class, 'index']);
Route::get('cabinets/{cabinet_id}', [CabinetController::class, 'show']);
Route::get('cabinet-slots', [CabinetSlotController::class, 'index']);
Route::get('cabinet-slots/{cabinet_id}', [CabinetSlotController::class, 'show']);
