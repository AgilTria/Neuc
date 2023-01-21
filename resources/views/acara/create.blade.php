@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="container-fluid">
        <div class="mb-3">
            <h2>Add New Acara</h2>
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
   
<form action="{{ route('acara.store') }}" method="POST">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama acara :</strong>
                <input class="form-control" type="text" name="nama_acara" class="" placeholder="Nama Acara">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            tanggal acara
            <input class="form-control" type='date' id='tanggal' name='tanggal_acara' onchange='cetakTanggal()'/><br/>

                <!-- <strong>tanggal acara:</strong>
                <input class="form-control" name="kelas" placeholder="Kelas"></input> -->
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>instansi id :</strong>
                <input class="form-control" type="numeric" step="1" value="" name="instansi_id" class="" placeholder="Instansi Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            template_sertifikat<input type="file" name="template_sertifikat" required="required"> <br/>
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <a class="btn btn-primary" href="{{ route('acara.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </div>
</div>
   
</form>
<script>
		// set default tanggal saat ini
		document.querySelector('#tanggal').value = new Date().toISOString().substring(0, 10);

		// fungsi onchange cetak nilai
		function cetakTanggal() {
		var tanggal = document.querySelector('#tanggal').value;
		document.querySelector('#cetak').innerHTML = tanggal.split('-')[2]+'-'+tanggal.split('-')[1]+'-'+tanggal.split('-')[0];
		}
		</script>
@endsection