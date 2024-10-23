<h1>Ini File Index Orang Tua</h1>
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

    {{-- =============Batas yang tidak perlu diubah================================================================== --}}


    <div class="container">
        <div class="row">



            <table class="table table-bordered border-primary">

                <tr>
                    {{-- <th>Nomor Id</th> --}}
                    <th>Nama Ayah</th>
                    <th>Nama Ibu </th>
                    <th>Nomor Induk Siswa</th>
                    <tH>Nomor Induk Siswa Nasional</tH>
                    <th>Alamat Siswa</th>
                    <th>Tanggal Lahir Siswa </th>
                    <th>Jenis Kelamin</th>
                    <th>No Telpom</th>


                    $table->string('nama_ayah', 100);
                    $table->string('nama_ibu', 100);
                    $table->text('alamat')->nullable();
                    $table->string('kota', 50)->nullable();
                    $table->string('provinsi', 50)->nullable();
                    $table->string('kode_pos', 10)->nullable();
                    $table->string('nomor_telepon_ayah', 15)->nullable();
                    $table->string('nomor_telepon_ibu', 15)->nullable();
                    $table->string('email_ayah', 100)->nullable();
                    $table->string('email_ibu', 100)->nullable();
                    $table->date('tanggal_lahir_ayah')->nullable();
                    $table->date('tanggal_lahir_ibu')->nullable();
                    $table->string('pekerjaan_ayah', 50)->nullable();
                    $table->string('pekerjaan_ibu', 50)->nullable();
                    $table->string('pendidikan_terakhir_ayah', 50)->nullable();
                    $table->string('pendidikan_terakhir_ibu', 50)->nullable();
                    $table->enum('status_pernikahan', ['Menikah', 'Cerai', 'Janda', 'Duda'])->nullable();
                    $table->date('tanggal_pernikahan')->nullable();
                    $table->integer('jumlah_anak')->nullable();
                    $table->text('catatan')->nullable();
                    $table->timestamps();

                </tr>

                @foreach ($data_ortu as $ortu)
                    <tr>
                        {{-- <td>{{ $siswa->id }}</td> --}}
                        <td>{{ $ortu->nama }}</td>
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
