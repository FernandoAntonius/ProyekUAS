<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsiaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kartuasia')->get();
        return view('negara.asia.cardAsia', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kartuasia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.asia.detailAsia', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'negara_asia' => 'required|string|max:255',
                'image_asia' => 'required|string|max:255',
                'deskripsi_asia' => 'required|string',
            ]);

            DB::table('kartuasia')->insert([
                'negara_asia' => $request->input('negara_asia'),
                'image_asia' => $request->input('image_asia'),
                'deskripsi_asia' => $request->input('deskripsi_asia'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil ditambahkan');
        }

        return view('negara.asia.createAsia');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kartuasia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'negara_asia' => 'required|string|max:255',
                'image_asia' => 'required|string|max:255',
                'deskripsi_asia' => 'required|string',
            ]);

            DB::table('kartuasia')->where('id', $id)->update([
                'negara_asia' => $request->input('negara_asia'),
                'image_asia' => $request->input('image_asia'),
                'deskripsi_asia' => $request->input('deskripsi_asia'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil diupdate');
        }

        return view('negara.asia.editAsia', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kartuasia')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Negara berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Negara tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kartuasia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.asia.deleteAsia', ['list' => $list]);
    }
}
