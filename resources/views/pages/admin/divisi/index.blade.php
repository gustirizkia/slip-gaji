@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('divisi.store') }}" method="post">
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama divisi</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama divisi"
                                required name="nama_divisi">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Gaji Perhari</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control form-control-sm" required name="gaji">
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
                                <th>Nama Divisi</th>
                                <th>Gaji Perhari</th>
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
                                <td>{{ $item->nama_divisi }}</td>
                                <td>Rp. {{ number_format($item->gaji) }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">

                                        <a href="{{ route('divisi.edit', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('divisi.destroy', $item->id) }}" method="POST">
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
