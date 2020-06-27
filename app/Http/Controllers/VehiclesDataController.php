<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiclesDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $data = DB::table('vehicles')
            ->select('vehicles.*', 'types.name', 'colors.name', 'brands.name', 'owners.*', 'drivers.*')
            ->join('types', 'vehicles.id_type', '=', 'types.id')
            ->join('colors', 'vehicles.id_color', '=', 'colors.id')
            ->join('brands', 'vehicles.id_brand', '=', 'brands.id')
            ->join('owners', 'vehicles.id_owner', '=', 'owners.id')
            ->join('drivers', 'vehicles.id_driver', '=', 'drivers.id')
            ->get();
    }
}
