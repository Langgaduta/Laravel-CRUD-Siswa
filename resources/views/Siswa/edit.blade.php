@extends('layouts.template')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h5 style="color:rgb(0, 64, 137)" class="mb-3">Edit Siswa</h5>
    <form action="/Siswa/{{ $siswa->id }}" method="POST" class="card p-5">
        @csrf
        @method('PATCH')

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $siswa['name'] }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">NIS :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa['nis'] }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $siswa['jurusan'] }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection
