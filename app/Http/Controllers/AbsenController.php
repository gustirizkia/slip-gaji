<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AbsenKaryawan;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AbsenKaryawan::orderBy('id', 'desc')->get();

        return view('pages.admin.karyawan.index', [
            'items' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $insert = AbsenKaryawan::create($data);

        return redirect()->route('karyawann.index')->with('success', 'Berhasil tambah data');
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
        $data = AbsenKaryawan::find($id);

        return view('pages.admin.karyawan.edit', [
            'item' => $data
        ]);
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
        $data = $request->except(['_token', '_method']);

        $update = AbsenKaryawan::find($id)->update($data);

        return redirect()->route('karyawann.index')->with('success', 'Berhasil ubah data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update = AbsenKaryawan::find($id)->delete();

        return redirect()->route('karyawann.index')->with('success', 'Berhasil hapus data');
    }
}
