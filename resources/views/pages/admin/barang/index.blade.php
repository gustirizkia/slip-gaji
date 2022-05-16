@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('barang.store') }}" method="post">
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Owner</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama Owner"
                                required name="nama_owner">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Tanggal</label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control form-control-sm" required name="tanggal">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Supplier</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama supplier "
                                required name="supplier">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Kode Barang</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control form-control-sm" placeholder="input kode barang "
                                required name="kode_barang">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Barang</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama barang "
                                required name="nama_barang">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Jumlah Barang</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama barang "
                                required name="jumlah">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success">Tambah data</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-body">

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Jenis Makanan & Minuman</th>
                                <th>Jumlah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp

                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">

                                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus data ?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                            @php
                            $no++;
                            @endphp
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">Data kosong</td>
                            </tr>
                            @endforelse

                            </td>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
