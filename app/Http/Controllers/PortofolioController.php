<?php

namespace App\Http\Controllers;

use App\Models\dokumentasi;
use App\Models\portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = portofolio::latest()->get();
        return view('admin.portofolio', compact('data'));
    }
    public function landing()
    {
        $data = portofolio::with('dokumentasi')->latest()->get();
        return view('portofolio-projek', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-portofolio');
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
            'nama' => 'max:500000',
            'bidang' => 'required',
            'lokasi' => 'required',
            'pengguna_jasa' => 'required',
            'tahun' => 'required',
        ]);


        $porto = portofolio::create(
            [
                'nama_paket_pekerjaan' => $request->nama,
                'bidang_pekerjaan' => $request->bidang,
                'lokasi' => $request->lokasi,
                'pengguna_jasa' => $request->pengguna_jasa,
                'tahun' => $request->tahun,
            ]
        );

        $files = $request->file('dokumentasi');
        foreach ($files as $file) {
            $filename = time() . "_" . $file->getClientOriginalName();
            $file->move('file-dokumentasi', $filename);
            dokumentasi::create([
                'id_proyek' => $porto->id,
                'dokumentasi' => $filename
            ]);
        }
        return redirect()->route('portofolio.index')->with('success', 'Berita Berhasil Disimpan');
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
        $data = portofolio::find($id)->with('dokumentasi')->first();

        return view('admin.edit-portofolio', compact('data'));
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
        if($request->submit == 'update'){
        $update = portofolio::find($id);
        $validatedData = $request->validate([
            'nama' => 'max:500000',
            'bidang' => 'required',
            'lokasi' => 'required',
            'pengguna_jasa' => 'required',
            'tahun' => 'required',
        ]);


        $update->nama_paket_pekerjaan = $request->nama;
        $update->bidang_pekerjaan = $request->bidang;
        $update->lokasi = $request->lokasi;
        $update->pengguna_jasa = $request->pengguna_jasa;
        $update->tahun = $request->tahun;
        $update->save();

        return redirect()->route('portofolio.index')->with('success', 'Berita Berhasil Diupdate');
    }
    else{
        $files = $request->file('dokumentasi');
        foreach ($files as $file) {
            $filename = time() . "_" . $file->getClientOriginalName();
            $file->move('file-dokumentasi', $filename);
            dokumentasi::create([
                'id_proyek' => $id,
                'dokumentasi' => $filename
            ]);
        }
        return redirect()->back()->with('success', 'Dokumentasi Berhasil Ditambah');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = portofolio::find($id);
        $data->delete();
        return redirect()->route('portofolio.index')->with('success', 'Portofolio Berhasil Dihapus');
    }
    public function tambahDokumentasi(Request $request,$id)
    {
        
    }
    public function destroyDokumentasi($id)
    {
        $data = dokumentasi::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Dokumentasi Berhasil Dihapus');
    }
}
