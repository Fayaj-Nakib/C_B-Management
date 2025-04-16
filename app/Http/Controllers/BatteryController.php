<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use Illuminate\Http\Request;

class BatteryController extends Controller
{
    public function index()
    {
        return Battery::all();
    }

    public function show($battery_id)
    {
        return Battery::find($battery_id);
    }
}
