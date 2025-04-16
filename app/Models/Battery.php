<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
    protected $primaryKey = 'battery_id';
    protected $fillable = ['charge_status', 'status'];

    public function cabinetSlots()
    {
        return $this->hasMany(CabinetSlot::class, 'battery_id', 'battery_id');
    }
}
