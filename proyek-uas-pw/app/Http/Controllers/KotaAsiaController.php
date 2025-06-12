<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaAsiaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kotaasia')->get();
        return view('kota.asia.cardKotaAsia', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kotaasia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.asia.detailKotaAsia', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kota_asia' => 'required|string|max:255',
                'image_kota_asia' => 'required|string|max:255',
                'deskripsi_kota_asia' => 'required|string',
            ]);

            DB::table('kotaasia')->insert([
                'kota_asia' => $request->input('kota_asia'),
                'image_kota_asia' => $request->input('image_kota_asia'),
                'deskripsi_kota_asia' => $request->input('deskripsi_kota_asia'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil ditambahkan');
        }

        return view('kota.asia.createKotaAsia');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kotaasia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'kota_asia' => 'required|string|max:255',
                'image_kota_asia' => 'required|string|max:255',
                'deskripsi_kota_asia' => 'required|string',
            ]);

            DB::table('kotaasia')->where('id', $id)->update([
                'kota_asia' => $request->input('kota_asia'),
                'image_kota_asia' => $request->input('image_kota_asia'),
                'deskripsi_kota_asia' => $request->input('deskripsi_kota_asia'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil diupdate');
        }

        return view('kota.asia.editKotaAsia', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kotaasia')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Kota berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Kota tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kotaasia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.asia.deleteKotaAsia', ['list' => $list]);
    }
}
