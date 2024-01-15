@extends('layouts.template')

@section('content')
<h5 style="color:rgb(0, 64, 137)" class="mb-3">Tambah Siswa</h5>
    <form action="/Siswa/store" method="POST" class="card  p-5">
        @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-laber">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-laber">NIS :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nis" name="nis">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-laber">Jurusan :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
        </div>
       
       
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    </form>
@endsection
