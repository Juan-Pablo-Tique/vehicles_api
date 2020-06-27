<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = ["vehicle_license_plate", "vehicle_id_type", "vehicle_id_color", "vehicle_id_brand", "vehicle_id_owner", "vehicle_id_driver"];
}
