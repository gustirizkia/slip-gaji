@extends('layouts.dashboard')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h6>Laporan Pemasukan Barang <br> di buat pada tanggal {{ \Carbon\Carbon::now()->format('d-M-Y') }}</h6>
            </div>
            <div class="col-md-6">
                <h6>Dari : {{ $dari }}</h6>
                <h6>Sampai : {{ $sampai }}</h6>
            </div>
        </div>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $item->kode_barang }} </td>
                    <td>
                        {{ $item->nama_barang }}
                    </td>
                    <td>{{ $item->jumlah }}</td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('cetak-laporan-barang') }}" class="btn btn-primary">Cetak Laporan</a>
    </div>
</div>
@endsection
