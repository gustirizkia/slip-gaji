<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AbsenKaryawan;
use App\Models\Penggajian;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("OK");
        $data = Penggajian::orderBy('id', 'desc')->get();
        $karyawan = AbsenKaryawan::get();

        return view('pages.admin.penggajian.index', [
            'items' => $data,
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $month = Carbon::now()->month;
        $tes = DB::table('absens')->whereMonth('created_at', $month)->first();
        // dd($month, $tes);
        $user = User::with('divisi', 'absen')
            ->where('roles', '!=', 'admin')
            ->withCount(['absen' => function ($query) use ($month) {
                return $query->whereMonth('created_at', $month);
            }])
            // ->orderBy('id', 'desc')
            ->get();

        $data = Penggajian::orderBy('id', 'desc')->get();
        $karyawan = AbsenKaryawan::get();

        return view('pages.admin.penggajian.tambah', [
            'items' => $data,
            'karyawan' => $karyawan,
            'user' => $user
        ]);
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

        $insert = Penggajian::create($data);

        return redirect()->back()->with('success', 'berhasil tambah data');
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
}
