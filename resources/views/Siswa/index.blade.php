@extends('layouts.template')

@section('content')

    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    @if (Session::get('deleted'))
        <div class="alert alert-warning">{{ Session::get('deleted') }}</div>
    @endif

    <a href="/Siswa/create"><button class="btn btn-primary mt-3">Tambah Data</button></a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($siswa as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="/Siswa/{{ $item->id }}/edit" class="btn btn-primary me-3">Edit</a>
                        <form action="/Siswa/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
