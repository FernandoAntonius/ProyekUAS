<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AustraliaController extends Controller
{
    public function index()
    {
        $lists = DB::table('kartuaustralia')->get();
        return view('negara.australia.cardaustralia', ['lists' => $lists]);
    }

    public function detail($id)
    {
        $list = DB::table('kartuaustralia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.australia.detailaustralia', ['list' => $list]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'negara_australia' => 'required|string|max:255',
                'image_australia' => 'required|string|max:255',
                'deskripsi_australia' => 'required|string',
            ]);

            DB::table('kartuaustralia')->insert([
                'negara_australia' => $request->input('negara_australia'),
                'image_australia' => $request->input('image_australia'),
                'deskripsi_australia' => $request->input('deskripsi_australia'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil ditambahkan');
        }

        return view('negara.australia.createaustralia');
    }

    public function edit(Request $request, $id)
    {
        $list = DB::table('kartuaustralia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'negara_australia' => 'required|string|max:255',
                'image_australia' => 'required|string|max:255',
                'deskripsi_australia' => 'required|string',
            ]);

            DB::table('kartuaustralia')->where('id', $id)->update([
                'negara_australia' => $request->input('negara_australia'),
                'image_australia' => $request->input('image_australia'),
                'deskripsi_australia' => $request->input('deskripsi_australia'),
                'updated_at' => now(),
            ]);

            return redirect()->route('trapel.list')->with('success', 'Negara berhasil diupdate');
        }

        return view('negara.australia.editaustralia', ['list' => $list]);
    }

    public function delete(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $deleted = DB::table('kartuaustralia')->where('id', $id)->delete();
            if ($deleted) {
                return redirect()->route('trapel.list')->with('success', 'Negara berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Negara tidak ditemukan atau tidak dapat dihapus');
            }
        }

        $list = DB::table('kartuaustralia')->where('id', $id)->first();
        if (!$list) {
            return redirect()->back()->with('error', 'Negara tidak ditemukan');
        }
        return view('negara.australia.deleteaustralia', ['list' => $list]);
    }
}
