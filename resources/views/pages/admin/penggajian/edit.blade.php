@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('barang.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Owner</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama Owner"
                                required name="nama_owner" value="{{ $item->nama_owner }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Tanggal</label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control form-control-sm" required name="tanggal"
                                value="{{ $item->tanggal }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Supplier</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama supplier "
                                required name="supplier" value="{{ $item->supplier }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Kode Barang</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control form-control-sm" placeholder="input kode barang "
                                required name="kode_barang" value="{{ $item->kode_barang }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Barang</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama barang "
                                required name="nama_barang" value="{{ $item->nama_barang }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Jumlah Barang</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama barang "
                                required name="jumlah" value="{{ $item->jumlah }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success">Tambah data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
