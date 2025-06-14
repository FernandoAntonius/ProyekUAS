<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KotaAustraliaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kotaaustralia')->get();
        return view('kota.australia.cardKotaaustralia', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kotaaustralia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.australia.detailKotaaustralia', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kota_australia' => 'required|string|max:255',
                'image_kota_australia' => 'required|string|max:255',
                'deskripsi_kota_australia' => 'required|string',
            ]);

            DB::table('kotaaustralia')->insert([
                'kota_australia' => $request->input('kota_australia'),
                'image_kota_australia' => $request->input('image_kota_australia'),
                'deskripsi_kota_australia' => $request->input('deskripsi_kota_australia'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil ditambahkan');
        }

        return view('kota.australia.createKotaaustralia');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kotaaustralia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'kota_australia' => 'required|string|max:255',
                'image_kota_australia' => 'required|string|max:255',
                'deskripsi_kota_australia' => 'required|string',
            ]);

            DB::table('kotaaustralia')->where('id', $id)->update([
                'kota_australia' => $request->input('kota_australia'),
                'image_kota_australia' => $request->input('image_kota_australia'),
                'deskripsi_kota_australia' => $request->input('deskripsi_kota_australia'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Kota berhasil diupdate');
        }

        return view('kota.australia.editKotaaustralia', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kotaaustralia')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Kota berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Kota tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kotaaustralia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Kota tidak ditemukan');
        }
        return view('kota.australia.deleteKotaaustralia', ['list' => $list]);
    }
}
