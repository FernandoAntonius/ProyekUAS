<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaAfrikaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kotaafrika')->get();
        return view('kota.afrika.cardKotaafrika', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kotaafrika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.afrika.detailKotaafrika', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kota_afrika' => 'required|string|max:255',
                'image_kota_afrika' => 'required|string|max:255',
                'deskripsi_kota_afrika' => 'required|string',
            ]);

            DB::table('kotaafrika')->insert([
                'kota_afrika' => $request->input('kota_afrika'),
                'image_kota_afrika' => $request->input('image_kota_afrika'),
                'deskripsi_kota_afrika' => $request->input('deskripsi_kota_afrika'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil ditambahkan');
        }

        return view('kota.afrika.createKotaafrika');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kotaafrika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'kota_afrika' => 'required|string|max:255',
                'image_kota_afrika' => 'required|string|max:255',
                'deskripsi_kota_afrika' => 'required|string',
            ]);

            DB::table('kotaafrika')->where('id', $id)->update([
                'kota_afrika' => $request->input('kota_afrika'),
                'image_kota_afrika' => $request->input('image_kota_afrika'),
                'deskripsi_kota_afrika' => $request->input('deskripsi_kota_afrika'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil diupdate');
        }

        return view('kota.afrika.editKotaafrika', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kotaafrika')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Kota berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Kota tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kotaafrika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.afrika.deleteKotaafrika', ['list' => $list]);
    }
}
