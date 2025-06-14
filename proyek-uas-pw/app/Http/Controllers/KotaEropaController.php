<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaEropaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kotaeropa')->get();
        return view('kota.eropa.cardKotaeropa', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kotaeropa')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.eropa.detailKotaeropa', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kota_eropa' => 'required|string|max:255',
                'image_kota_eropa' => 'required|string|max:255',
                'deskripsi_kota_eropa' => 'required|string',
            ]);

            DB::table('kotaeropa')->insert([
                'kota_eropa' => $request->input('kota_eropa'),
                'image_kota_eropa' => $request->input('image_kota_eropa'),
                'deskripsi_kota_eropa' => $request->input('deskripsi_kota_eropa'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil ditambahkan');
        }

        return view('kota.eropa.createKotaeropa');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kotaeropa')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'kota_eropa' => 'required|string|max:255',
                'image_kota_eropa' => 'required|string|max:255',
                'deskripsi_kota_eropa' => 'required|string',
            ]);

            DB::table('kotaeropa')->where('id', $id)->update([
                'kota_eropa' => $request->input('kota_eropa'),
                'image_kota_eropa' => $request->input('image_kota_eropa'),
                'deskripsi_kota_eropa' => $request->input('deskripsi_kota_eropa'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil diupdate');
        }

        return view('kota.eropa.editKotaeropa', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kotaeropa')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Kota berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Kota tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kotaeropa')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.eropa.deleteKotaeropa', ['list' => $list]);
    }
}
