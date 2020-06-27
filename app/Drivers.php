<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $fillable = ["driver_identification_number", "driver_first_name", "driver_second_name", "driver_surnames", "driver_direction", "driver_telephone", "driver_id_city"];
}
