<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=laporan::latest()->get();
        return view('admin.laporan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-laporan');
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
            'file' => 'max:500000',
            'judul' => 'required',
            'tahun' => 'required',
        ]);
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('file-laporan', $nama_file);
        laporan::create(
            [
                'judul' => $request->judul,
                'file' => $nama_file,
                'tahun' => $request->tahun 
            ]
        );
        return redirect()->route('laporan.index')->with('success', 'Laporan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = laporan::find($id);

        return view('admin.edit-laporan', compact('data'));
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
            'file' => 'max:500000',
            'judul' => 'required',
            'tahun' => 'required',
        ]);

        $update = laporan::find($id);
        $file = $request->file('file');
        if ($file != null) {
            File::delete('file-laporan/' . $update->file);
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('file-laporan', $nama_file);
            $update->file = $nama_file;
        }
        $update->judul = $request->judul;
        $update->tahun = $request->tahun;
        $update->save();
        return redirect()->route('laporan.index')->with('success', 'Laporan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = laporan::find($id);
        File::delete('file/' . $data->file);
        $data->delete();

        return redirect()->route('laporan.index')->with('success', 'Laporan Berhasil Dihapus');
    }
}
