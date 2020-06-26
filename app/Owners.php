<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    protected $fillable = ["identification_number", "first_name", "second_name", "surnames", "direction", "telephone", "id_city"];
}
