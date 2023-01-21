@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="container-fluid">
            <div class="mb-3">
                <h1>Daftar Instansi</h1>
            </div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('instansi.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label class="label">Nama Instansi</label>
            <input name="nama_instansi" class="form-control" type="text" placeholder="Masukkan nama instansi">
        </div>

        <div class="mb-3">
            <label class="label">nomor_lembaga</label>
            <input name="nomor_lembaga" class="form-control" type="number" placeholder="Masukkan nomor instansi">
        </div>


        <div class="mb-3">
            <label class="label">Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat instansi"></textarea>
        </div>


        <div class="mb-3">
            <label class="label">Email</label>
            <input name="email" class="form-control" type="email" placeholder="Masukkan email instansi">
        </div>

        <div class="mb-3">
            <label class="label">Password</label>
            <input name="password" class="form-control" type="password" placeholder="Buat password akun">
        </div>

        <label class="checkbox">
            <input type="checkbox">
            Data yang dimasukkan sudah benar dan sesuai
        </label>
        <!-- <div class="field is-grouped"> -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
             <a class="btn btn-primary" href="{{ route('instansi.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

        <!-- <p class="control">
                <a class="button is-light">
                    Cancel
                </a>
            </p> -->
        <!-- </div> -->
    
    </div>
    </div>
    </div>
</form>
</div>
@endsection