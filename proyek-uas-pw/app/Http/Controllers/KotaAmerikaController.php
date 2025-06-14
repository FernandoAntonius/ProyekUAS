<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaAmerikaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kotaamerika')->get();
        return view('kota.amerika.cardKotaamerika', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kotaamerika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.amerika.detailKotaamerika', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kota_amerika' => 'required|string|max:255',
                'image_kota_amerika' => 'required|string|max:255',
                'deskripsi_kota_amerika' => 'required|string',
            ]);

            DB::table('kotaamerika')->insert([
                'kota_amerika' => $request->input('kota_amerika'),
                'image_kota_amerika' => $request->input('image_kota_amerika'),
                'deskripsi_kota_amerika' => $request->input('deskripsi_kota_amerika'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil ditambahkan');
        }

        return view('kota.amerika.createKotaamerika');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kotaamerika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'kota_amerika' => 'required|string|max:255',
                'image_kota_amerika' => 'required|string|max:255',
                'deskripsi_kota_amerika' => 'required|string',
            ]);

            DB::table('kotaamerika')->where('id', $id)->update([
                'kota_amerika' => $request->input('kota_amerika'),
                'image_kota_amerika' => $request->input('image_kota_amerika'),
                'deskripsi_kota_amerika' => $request->input('deskripsi_kota_amerika'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil diupdate');
        }

        return view('kota.amerika.editKotaamerika', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kotaamerika')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Kota berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Kota tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kotaamerika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.amerika.deleteKotaamerika', ['list' => $list]);
    }
}
