<h1>Ini File Index Siswa</h1>
{{-- {{ dd($data_siswa) }} --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- //=============Batas yang tidak perlu diubah==================================================================// --}}

    <div class="container">
        <div class="row">



            <table class="table">

                <tr>
                    {{-- <th>Nomor Id</th> --}}
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Nomor Induk Siswa</th>
                    <tH>Nomor Induk Siswa Nasional</tH>
                    <th>Alamat Siswa</th>
                    <th>Tanggal Lahir Siswa </th>
                    <th>Jenis Kelamin</th>
                    <th>No Telpom</th>
                    <th>Alamat</th>

                </tr>
                @foreach ($data_siswa as $siswa)
                    <tr>
                        {{-- <td>{{ $siswa->id }}</td> --}}
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->nama_belakang }}</td>
                        <td>{{ $siswa->nis_siswa }}</td>
                        <td>{{ $siswa->NIS }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->tanggal_lahir }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->no_telp }}</td>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>
                @endforeach

            </table>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
            </script>
        </div>
    </div>
</body>

</html>
