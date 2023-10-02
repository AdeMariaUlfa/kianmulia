<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Career::latest()->get();
        return view('admin.career', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-career');
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

            'judul' => 'required',
            'requirement' => 'required',
        ]);
        Career::create(
            [
                'judul' => $request->judul,
                'requirement' => $request->requirement
            ]
        );
        return redirect()->route('career.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareerController  $careerController
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        return view('detail-karir',compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareerController  $careerController
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('admin.edit-career',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CareerController  $careerController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        
        $validatedData = $request->validate([
            'judul' => 'required',
            'requirement' => 'required',
        ]);

        $career->judul = $request->judul;
        $career->requirement = $request->requirement;
        $career->save();
        return redirect()->route('career.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareerController  $careerController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('career.index')->with('success', 'Data Berhasil Dihapus');

    }
}
