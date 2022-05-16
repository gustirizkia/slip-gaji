@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('omset.store') }}" method="post">
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Harga Jual</label>
                            <input type="text" class="form-control" placeholder="input nama " required
                                name="harga_jual">
                        </div>
                        <div class="col-md-6">
                            <label for="">Untung</label>
                            <input type="text" class="form-control" placeholder="input nama " name="untung">
                        </div>
                        <div class="col-md-6">
                            <label for="">Modal</label>
                            <input type="text" class="form-control" placeholder="input nama " required name="modal">
                        </div>
                        <div class="col-md-6">
                            <label for="">Rugi</label>
                            <input type="text" class="form-control" placeholder="input nama " name="rugi">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success">Hitung</button>
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
                                <th>Harga Jual</th>
                                <th>Modal</th>
                                <th>Untung</th>
                                <th>Rugi</th>
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
                                <td>Rp.{{ number_format($item->harga_jual) }}</td>
                                <td>Rp.{{ number_format($item->modal) }}</td>
                                <td>Rp.{{ number_format($item->untung) }}</td>
                                <td>Rp.{{ number_format($item->rugi) }}</td>
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
