<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnersDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $data = DB::table('owners')
            ->select('owners.*', 'cities.name')
            ->join('cities', 'owners.id_city', '=', 'cities.id')
            ->get();
    }
}
