<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Kendaraanmodel;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = Kendaraanmodel::all();
        return view('kendaraan')
                    ->with('kendaraan', $kendaraan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


}
