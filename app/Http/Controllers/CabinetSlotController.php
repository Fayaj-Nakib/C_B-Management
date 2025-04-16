<?php

namespace App\Http\Controllers;

use App\Models\CabinetSlot;
use Illuminate\Http\Request;

class CabinetSlotController extends Controller
{
    public function index()
    {
        return CabinetSlot::all();
    }

    public function show($cabinet_id)
    {
        return CabinetSlot::where('cabinet_id', $cabinet_id)->get();
    }
}
