<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use Carbon\Carbon;
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
        date_default_timezone_set('Asia/Jakarta');

        $now = Carbon::now();
        // dd(auth()->user());
        $data = Absen::orderBy('id', 'desc')->where('karyawan_id', auth()->user()->id)->get();

        $cek = Absen::where('karyawan_id', auth()->user()->id)->whereDate('masuk', $now)->first();

        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");

        /* Set the $timezone variable to become the current timezone */
        $timezone = date("e");

        // diluar jam
        $jenis = "tidak ada";

        // jam pulang
        if ($time >= "17") {
            $jenis = "Pulang";
        }

        // jam masuk
        if ($time < "9" && $time >= "7") {
            $jenis = "Masuk";
        }

        $date = Carbon::now()->format('H:i, d M Y');

        return view('pages.admin.absen.index', [
            'items' => $data,
            'jenis' => $jenis,
            'date' => $date,
            'cek' => $cek
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
       $data = Absen::create([
            'karyawan_id' => auth()->user()->id,
            'masuk' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'berhasil melakukan absen');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pulang($id){
        $data = Absen::find($id)->update([
                'status' => 'pulang',
                'karyawan_id' => auth()->user()->id,
                'keluar' => Carbon::now()
            ]);

         return redirect()->back()->with('success', 'berhasil melakukan absen');
    }

    public function masuk(){
        $data = Absen::create([
            'karyawan_id' => auth()->user()->id,
            'masuk' => Carbon::now()
        ]);
    }
}
