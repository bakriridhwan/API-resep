<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resep;

class ResepController extends Controller
{
    //
    public function index()
    {
        $reseps = Resep::all();
        return response()->json($reseps);
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'alat' => 'required',
            'langkah' => 'required',
        ]);

        // save to DB
        $resep = Resep::create([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'alat' => $request->bahan,
            'langkah' => $request->langkah,
        ]);

        // return response
        return response()->json($resep);
    }


    public function update(Request $request, Resep $resep)
    {
        // validation
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'alat' => 'required',
            'langkah' => 'required',
        ]);

        $resep->update([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'alat' => $request->bahan,
            'langkah' => $request->langkah,
        ]);

        // return response
        return response()->json($resep);
    }

    public function destroy(Resep $resep)
    {
        $resep->delete();
        return response()->json($resep);
    }
}
