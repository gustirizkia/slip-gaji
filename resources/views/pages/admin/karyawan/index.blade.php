@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('karyawann.store') }}" method="post">
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Karyawan</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="input nama " required name="nama">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Alamat</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="input alamat " required name="alamat">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nomor Telepon</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="input nomor telepon " required
                                name="phone">
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
                                <th>Nama Karyawan</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
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
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">

                                        <a href="{{ route('karyawann.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('karyawann.destroy', $item->id) }}" method="POST">
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
