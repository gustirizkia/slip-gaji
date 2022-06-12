@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('karyawann.update', $item->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Karyawan</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="input nama " required name="nama"
                                value="{{ $item->nama }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Alamat</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="input alamat " required name="alamat"
                                value="{{ $item->alamat }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nomor Telepon</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="input nomor telepon " required
                                name="phone" value="{{ $item->phone }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
