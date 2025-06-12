<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
class NegaraController extends Controller
{
    public function negara()
    {
        $asiaLists = DB::table('kartuasia')->get();
        $eropaLists = DB::table('kartueropa')->get();
        $amerikaLists = DB::table('kartuamerika')->get();
        $afrikaLists = DB::table('kartuafrika')->get();
        $australiaLists = DB::table('kartuaustralia')->get();
        return view('negara.negara', ['asiaLists' => $asiaLists, 'eropaLists' => $eropaLists, 'amerikaLists' => $amerikaLists, 'afrikaLists' => $afrikaLists, 'australiaLists' => $australiaLists]);
    }
}
