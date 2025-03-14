<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Laporan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>No ID</th>
                <th>Posisi</th>
                <th>Divisi</th>
                <th>Tanggal & Waktu</th>
                <th>Lokasi</th>
                <th>Golden Rules Violation</th>
                <th>Unsafe Action</th>
                <th>Safe Behaviour</th>
                <th>Cuaca</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->nama_pelapor }}</td>
                <td>{{ $data->no_id }}</td>
                <td>{{ $data->posisi }}</td>
                <td>{{ $data->divisi }}</td>
                <td>{{ $data->datetime }}</td>
                <td>{{ $data->lokasi }}</td>
                <td>{{ $data->golden }}</td>
                <td>{{ $data->unsafe }}</td>
                <td>{{ $data->safe }}</td>
                <td>{{ $data->cuaca }}</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
