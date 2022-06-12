@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('v2-karyawan.store') }}" method="post">
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Karyawan</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="input nama " required name="name">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama Karyawan</label>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="input nama " required name="email">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Divisi</label>
                        </div>
                        <div class="col-md-6">
                            <select name="divisi_id" id="" class="form-select" required>
                                <option value="">Pilih Divisi</option>
                                @foreach ($divisi as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Password Karyawan</label>
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="input nama " required
                                name="password">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button class="btn btn-success">Simpan</button>
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
                                <th>Email Karyawan</th>
                                <th>Divisi</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp

                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->divisi->nama_divisi }}</td>
                                {{-- <td>
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

                                </td> --}}
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
