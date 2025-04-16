<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    protected $primaryKey = 'cabinet_id';
    protected $fillable = ['status', 'battery_count', 'lat_long'];

    public function slots()
    {
        return $this->hasMany(CabinetSlot::class, 'cabinet_id', 'cabinet_id');
    }
}
