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
<table class="table table-sm" style="font-size: 12px">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Divisi</th>
            <th>Total Gaji Bulan ini</th>
            <th>Total Absen</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp

        @forelse ($user as $item)
            @php
                $gaji = $item->absen_count * $item->divisi->gaji;
            @endphp
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->nama_divisi }}</td>
                <td>Rp.{{ number_format($gaji) }}</td>
                <td>{{ $item->absen_count }}</td>

            </tr>
            @php
                $no++;
            @endphp
        @empty
            <tr>
                <td colspan="10" class="text-center">Data kosong Te</td>
            </tr>
        @endforelse

        </td>
    </tbody>
</table>

<body>

</body>

</html>
