<h1>Ini File Index Buku</h1>
{{-- {{ dd($data_buku) }} --}}
{{-- <h1>Ini File Index Siswa</h1>
{{ dd($data_buku) }} --}}

<table class="table table-bordered border-primary">

    <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Penerbit</th>
        <th>ISBN</th>
        <th>Harga</th>
        <th>Jumlah Halaman</th>
        <th>Tanggal Terbit</th>
        <th>Stok</th>
        <th>Status</th>
        <th>Bahasa</th>
        <th>Deskripsi</th>
    </tr>

    @foreach ($data_buku as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->kategori->nama ?? 'N/A' }}</td> <!-- Assuming you have a relation to categories -->
            <td>{{ $book->penerbit }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ number_format($book->harga, 0, ',', '.') }}</td>
            <td>{{ $book->jumlah_halaman }}</td>
            <td>{{ \Carbon\Carbon::parse($book->tgl_terbit)->format('d-m-Y') }}</td>
            <td>{{ $book->stok }}</td>
            <td>{{ $book->status }}</td>
            <td>{{ $book->bahasa ?? 'N/A' }}</td>
            <td>{{ $book->deskripsi ?? 'N/A' }}</td>
        </tr>
    @endforeach

</table>
