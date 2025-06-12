<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrapelController extends Controller
{
    public function trapel()
    {
        $asiaLists = DB::table('kartuasia')->get();
        $eropaLists = DB::table('kartueropa')->get();
        $amerikaLists = DB::table('kartuamerika')->get();
        $afrikaLists = DB::table('kartuafrika')->get();
        $australiaLists = DB::table('kartuaustralia')->get();

        $kotaAsiaLists = DB::table('kotaasia')->get();
        $kotaEropaLists = DB::table('kotaeropa')->get();
        $kotaAmerikaLists = DB::table('kotaamerika')->get();
        $kotaAfrikaLists = DB::table('kotaafrika')->get();
        $kotaAustraliaLists = DB::table('kotaaustralia')->get();

        return view('layout.content', [
            'asiaLists' => $asiaLists,
            'eropaLists' => $eropaLists,
            'amerikaLists' => $amerikaLists,
            'afrikaLists' => $afrikaLists,
            'australiaLists' => $australiaLists,

            'kotaAsiaLists' => $kotaAsiaLists,
            'kotaEropaLists' => $kotaEropaLists,
            'kotaAmerikaLists' => $kotaAmerikaLists,
            'kotaAfrikaLists' => $kotaAfrikaLists,
            'kotaAustraliaLists' => $kotaAustraliaLists,
        ]);
    }
}
