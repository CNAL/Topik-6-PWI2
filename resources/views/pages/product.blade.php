@extends('pages.beranda')

@section('konten')
    <h2>Daftar produk kami</h2>
    <hr>

    <button type="button" class="btn btn-primary btn-sm mb-3">
        Tambah Data
    </button>

    <div class="card">
        <div class="card-header">
            Produk Kami
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['stok'] }}</td>

                                <td>
                                    Rp. {{ number_format($item['harga'], 0, ',', '.') }}
                                </td>

                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                    >
                                        Delete
                                    </button>

                                    <button
                                        type="button"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection