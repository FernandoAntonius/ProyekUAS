<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{    
    public function kota() 
    {
        $kotaAsiaLists = DB::table('kartuasia')->get();
        return view('kota.kota', ['kotaAsiaLists' => $kotaAsiaLists]);
    }
}