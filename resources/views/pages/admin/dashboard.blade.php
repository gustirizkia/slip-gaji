@extends('layouts.dashboard')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <a href="" class="btn btn-success ">
                            Tambah Data
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-content">

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>IMAGE</th>
                                <th>KARYAWAN</th>
                                <th>JABATAN</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="" class="img-rounded">
                                </td>
                                <td class="text-bold-500">Lorem ipsum dolor sit.</td>
                                <td>Lorem ipsum dolor sit amet consectetur.</td>
                                <td>
                                    <form action="" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
