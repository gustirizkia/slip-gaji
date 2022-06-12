@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Absen Tanggal : {{ \Carbon\Carbon::now()->format('d M Y') }}</h5>
            </div>
            <div class="card-body">

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>Jam Masuk</th>
                                <th>Jam Pulang</th>
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
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->masuk }}</td>
                                <td>{{ $item->keluar === null ? '-' : $item->keluar }}</td>
                                <td>
                                    @if ($item->masuk === null || $item->keluar === null)
                                    @if ($jenis === "Masuk")
                                    <form action="{{ route('absen.store') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-warning">Masuk</button>
                                    </form>
                                    @else
                                    <a href="{{ route('pulang', $item->id) }}" class="btn btn-success">Pulang</a>
                                    @endif
                                    @else
                                    -
                                    @endif

                                </td>
                            </tr>
                            @php
                            $no++;
                            @endphp
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">
                                    no data
                                </td>
                            </tr>
                            @endforelse

                            </td>
                            @if ($cek === null || $jenis === 'Masuk')
                            <td colspan="10" class="text-center">
                                <form action="{{ route('absen.store') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-warning btn-block">Masuk</button>
                                </form>
                            </td>

                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
