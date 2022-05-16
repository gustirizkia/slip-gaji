@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('penggajian.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nama Karyawan</label>
                            <input type="text" class="form-control" name="nama_karyawan" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Gaji Pokok</label>
                            <input type="number" class="form-control" name="gaji_pokok" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-select" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Prempuan">Prempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Jam Lembur</label>
                            <input type="number" class="form-control" name="jam_lembur" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Upah Lembur</label>
                            <input type="text" class="form-control" name="upah_lembur" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Total Gaji</label>
                            <input type="number" class="form-control" name="total_gaji" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button class="btn btn-success">Hitung</button>
                            <button class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </form>

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Gaji Pokok</th>
                                <th>Jam Lembur</th>
                                <th>Upah</th>
                                <th>Total Gaji di Terima</th>
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
                                <td>{{ $item->nama_karyawan }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>Rp.{{ number_format($item->gaji_pokok) }}</td>
                                <td>{{ $item->jam_lembur }} Jam</td>
                                <td>Rp.{{ number_format($item->upah_lembur) }}</td>
                                <td>Rp.{{ number_format($item->total_gaji) }}</td>
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
