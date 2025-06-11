<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\AsiaController;
use App\Http\Controllers\EropaController;

class NegaraController extends Controller
{
    public function negara()
    {
        $asiaLists = DB::table('table_kartuasia')->get();
        $eropaLists = DB::table('table_kartueropa')->get();
        return view('negara.negara', ['asiaLists' => $asiaLists, 'eropaLists' => $eropaLists]);
    }
}
