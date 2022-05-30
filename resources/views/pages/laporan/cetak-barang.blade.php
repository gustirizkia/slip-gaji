<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Laporan</title>
</head>
<table class="table table-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($items as $item)
        <tr>
            <th scope="row">{{ $no }}</th>
            <td>{{ $item->kode_barang }} </td>
            <td>
                {{ $item->nama_barang }}
            </td>
            <td>{{ $item->jumlah }}</td>
        </tr>
        @php
        $no++;
        @endphp
        @endforeach
    </tbody>
</table>

<body>

</body>

</html>
