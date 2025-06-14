<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{    
    public function kota() 
    {
        $kotaAsiaLists = DB::table('kotaasia')->get();
        $kotaEropaLists = DB::table('kotaeropa')->get();
        $kotaAmerikaLists = DB::table('kartuamerika')->get();
        $kotaAustraliaLists = DB::table('kotaaustralia')->get();
        $kotaAfrikaLists = DB::table('kotaafrika')->get();
    
        return view('kota.kotaonly', [
            'kotaAsiaLists' => $kotaAsiaLists,
            'kotaEropaLists' => $kotaEropaLists,
            'kotaAmerikaLists' => $kotaAmerikaLists,
            'kotaAustraliaLists' => $kotaAustraliaLists,
            'kotaAfrikaLists' => $kotaAfrikaLists
        ]);
    }
}