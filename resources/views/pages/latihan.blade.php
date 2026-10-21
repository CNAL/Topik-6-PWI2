@extends('pages.beranda')

@section('konten')
    <h2>Daftar Mata Kuliah</h2>

    <ul>
        @foreach ($matakuliah as $matkul)
            <li>{{ $matkul }}</li>
        @endforeach
    </ul>

    <button type="button" class="btn btn-warning">
        Edit
    </button>
@endsection