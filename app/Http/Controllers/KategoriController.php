<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $kategoris = Kategori::all();
        return response()->json($kategoris);
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'nama_kategori' => 'required',
            'gambar_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        // ?API BISA
        // save to DB
        $kategori = Kategori::create([

            'nama_kategori' => $request->nama_kategori,
            'gambar_kategori' => $request->gambar_kategori,
            'deskripsi_kategori' => $request->deskripsi_kategori,
        ]);

        return response()->json($kategori);
    }



























    public function update(Request $request, Kategori $kategori)
    {
        // validation
        $request->validate([
            'nama_kategori' => 'required',
            'gambar_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
            'gambar_kategori' => $request->gambar_kategori,
            'deskripsi_kategori' => $request->deskripsi_kategori,
        ]);

        // return response
        return response()->json($kategori);
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return response()->json($kategori);
    }
}
