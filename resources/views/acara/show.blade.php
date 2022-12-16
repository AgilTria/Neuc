@section('content')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Acara</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Acara:</strong>
                {{ $acara->nama_acara }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal acara:</strong>
                {{ $acara->tanggal_acara }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Instansi id:</strong>
                {{ $acara->instansi_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>template sertifikat:</strong>
                {{ $acara->template_sertifikat }}
            </div>
        </div>
    </div>
@endsection