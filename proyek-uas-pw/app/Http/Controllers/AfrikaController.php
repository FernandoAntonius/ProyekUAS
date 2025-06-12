<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AfrikaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kartuafrika')->get();
        return view('negara.afrika.cardafrika', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kartuafrika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.afrika.detailafrika', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'negara_afrika' => 'required|string|max:255',
                'image_afrika' => 'required|string|max:255',
                'deskripsi_afrika' => 'required|string',
            ]);

            DB::table('kartuafrika')->insert([
                'negara_afrika' => $request->input('negara_afrika'),
                'image_afrika' => $request->input('image_afrika'),
                'deskripsi_afrika' => $request->input('deskripsi_afrika'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil ditambahkan');
        }

        return view('negara.afrika.createafrika');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kartuafrika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'negara_afrika' => 'required|string|max:255',
                'image_afrika' => 'required|string|max:255',
                'deskripsi_afrika' => 'required|string',
            ]);

            DB::table('kartuafrika')->where('id', $id)->update([
                'negara_afrika' => $request->input('negara_afrika'),
                'image_afrika' => $request->input('image_afrika'),
                'deskripsi_afrika' => $request->input('deskripsi_afrika'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil diupdate');
        }

        return view('negara.afrika.editafrika', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kartuafrika')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Negara berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Negara tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kartuafrika')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.afrika.deleteafrika', ['list' => $list]);
    }
}
