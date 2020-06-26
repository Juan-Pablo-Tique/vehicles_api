<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = ["license_plate" , "id_type", "id_color", "id_brand", "id_owner", "id_driver"];
}
