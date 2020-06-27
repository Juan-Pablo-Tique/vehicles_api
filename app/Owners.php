<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    protected $fillable = ["owner_identification_number", "owner_first_name", "owner_second_name", "owner_surnames", "owner_direction", "owner_telephone", "owner_id_city"];
}
