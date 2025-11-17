<!DOCTYPE html>
<html>

<head>
    <title>Daftar Anggota</title>
</head>

<body>

    <h2>Daftar Anggota</h2>

    @if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif
    <br>

    <a href="{{ route('anggota.create') }}">Tambah Anggota Baru</a>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @if ($anggota->isEmpty())
            <tr>
                <td colspan="6" style="text-align: center;">Tidak ada data.</td>
            </tr>
            @else
            @foreach ($anggota as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nomor_anggota }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

</body>

</html>