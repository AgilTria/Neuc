
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Acara</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('acara.index') }}"> Back</a>
            </div>
        </div>
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
  
    <form action="{{ route('acara.update',$acara->acara_id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Acara:</strong>
                    <input type="text" name="nama acara" value="{{ $acara->nama_acara }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal acara:</strong>
                    <input class="form-control" name="tanggal acara" placeholder="" value="{{ $acara->tanggal_acara }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Instansi id:</strong>
                    <input class="form-control" name="instansi id" placeholder="" value="{{ $acara->instansi_id }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Template sertifikat:</strong>
                    <input class="form-control" name="template sertifikat" placeholder="" value="{{ $acara->template_sertifikat }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection