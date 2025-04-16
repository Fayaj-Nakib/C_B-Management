<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function index()
    {
        return Cabinet::all();
    }

    public function show($cabinet_id)
    {
        return Cabinet::find($cabinet_id);
    }
}
