<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CabinetSlot extends Model
{
    protected $fillable = ['cabinet_id', 'battery_id', 'door_id', 'door_status'];

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'cabinet_id', 'cabinet_id');
    }

    public function battery()
    {
        return $this->belongsTo(Battery::class, 'battery_id', 'battery_id');
    }
}
