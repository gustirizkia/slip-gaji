@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('divisi.update', $item->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Nama divisi</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="input nama divisi"
                                required name="nama_divisi" value="{{ $item->nama_divisi }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="">Gaji Perhari</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control form-control-sm" required name="gaji"
                                value="{{ $item->gaji }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success">Update data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
