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
            ->select('vehicles.*', 'types.*', 'colors.*', 'brands.*', 'owners.*', 'drivers.*')
            ->join('types', 'vehicles.vehicle_id_type', '=', 'types.type_id')
            ->join('colors', 'vehicles.vehicle_id_color', '=', 'colors.color_id')
            ->join('brands', 'vehicles.vehicle_id_brand', '=', 'brands.brand_id')
            ->join('owners', 'vehicles.vehicle_id_owner', '=', 'owners.owner_id')
            ->join('drivers', 'vehicles.vehicle_id_driver', '=', 'drivers.driver_id')
            ->get();
    }
}
