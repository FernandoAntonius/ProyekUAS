<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmerikaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kartuamerika')->get();
        return view('negara.amerika.cardamerika', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kartuamerika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.amerika.detailamerika', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'negara_amerika' => 'required|string|max:255',
                'image_amerika' => 'required|string|max:255',
                'deskripsi_amerika' => 'required|string',
            ]);

            DB::table('kartuamerika')->insert([
                'negara_amerika' => $request->input('negara_amerika'),
                'image_amerika' => $request->input('image_amerika'),
                'deskripsi_amerika' => $request->input('deskripsi_amerika'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil ditambahkan');
        }

        return view('negara.amerika.createamerika');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kartuamerika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'negara_amerika' => 'required|string|max:255',
                'image_amerika' => 'required|string|max:255',
                'deskripsi_amerika' => 'required|string',
            ]);

            DB::table('kartuamerika')->where('id', $id)->update([
                'negara_amerika' => $request->input('negara_amerika'),
                'image_amerika' => $request->input('image_amerika'),
                'deskripsi_amerika' => $request->input('deskripsi_amerika'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil diupdate');
        }

        return view('negara.amerika.editamerika', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kartuamerika')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Negara berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Negara tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kartuamerika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.amerika.deleteamerika', ['list' => $list]);
    }
}
