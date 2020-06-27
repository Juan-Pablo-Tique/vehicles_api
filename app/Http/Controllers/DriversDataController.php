<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriversDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $data = DB::table('drivers')
            ->select('drivers.*', 'cities.name')
            ->join('cities', 'drivers.id_city', '=', 'cities.id')
            ->get();
    }
}
