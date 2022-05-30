<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function barang(){
        $data = Barang::orderBy('tanggal', 'desc')->get();

        $dari = Barang::orderBy('tanggal', 'asc')->first();
        $sampai = Barang::orderBy('tanggal', 'desc')->first();

        return view('pages.laporan.barang', [
            'items' =>  $data,
            'dari' => Carbon::parse($dari->tanggal)->format('d-M-Y'),
            'sampai' => Carbon::parse($sampai->tanggal)->format('d-M-Y'),
        ]);

        // $pdf = PDF::loadView('laporan.barang', [
        //     'items' => $data
        // ]);

        // return $pdf->stream();

    }
    public function barangCetak(){
        $data = Barang::orderBy('tanggal', 'desc')->get();

        $pdf = PDF::loadView('pages.laporan.cetak-barang', [
            'items' => $data
        ]);

        return $pdf->download('laporan-pemasukan-barang.pdf');

        return $pdf->stream();

    }
}
