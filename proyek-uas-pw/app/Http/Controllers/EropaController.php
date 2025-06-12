<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EropaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kartueropa')->get();
        return view('negara.eropa.carderopa', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kartueropa')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.eropa.detaileropa', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'negara_eropa' => 'required|string|max:255',
                'image_eropa' => 'required|string|max:255',
                'deskripsi_eropa' => 'required|string',
            ]);

            DB::table('kartueropa')->insert([
                'negara_eropa' => $request->input('negara_eropa'),
                'image_eropa' => $request->input('image_eropa'),
                'deskripsi_eropa' => $request->input('deskripsi_eropa'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil ditambahkan');
        }

        return view('negara.eropa.createeropa');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kartueropa')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'negara_eropa' => 'required|string|max:255',
                'image_eropa' => 'required|string|max:255',
                'deskripsi_eropa' => 'required|string',
            ]);

            DB::table('kartueropa')->where('id', $id)->update([
                'negara_eropa' => $request->input('negara_eropa'),
                'image_eropa' => $request->input('image_eropa'),
                'deskripsi_eropa' => $request->input('deskripsi_eropa'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil diupdate');
        }

        return view('negara.eropa.editeropa', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kartueropa')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Negara berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Negara tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kartueropa')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.eropa.deleteeropa', ['list' => $list]);
    }
}
