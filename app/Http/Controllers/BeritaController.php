<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = berita::latest()->get();
        return view('admin.berita', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-berita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'img' => 'max:500000',
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $file = $request->file('img');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('image', $nama_file);
        berita::create(
            [
                'img' => $nama_file,
                'judul' => $request->judul,
                'isi' => $request->isi
            ]
        );
        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = berita::find($id);
        return view('show-berita', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = berita::find($id);

        return view('admin.edit-berita', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'img' => 'max:500000',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $update = berita::find($id);
        $file = $request->file('img');
        if ($file != null) {
            File::delete('image/' . $update->img);
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('image', $nama_file);
            $update->img = $nama_file;
        }
        $update->judul = $request->judul;
        $update->isi = $request->isi;
        $update->save();
        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = berita::find($id);
        File::delete('image/' . $data->img);
        $data->delete();

        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Dihapus');
    }
}
