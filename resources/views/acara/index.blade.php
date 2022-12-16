@extends('layouts.app')
<!-- @include('components.navbar') -->


@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Data Acara </h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('acara.create') }}"> Create New Acara</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
        <th>id</th>
        <th>nama_acara</th>
        <th>tanggal_acara</th>
        <th>instansi_id</th>
        <th>template_sertifikat</th>

        <th width="280px">Action</th>
        </tr>
        @foreach ($acara as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->nama_acara }}</td>
            <td>{{ $a->tanggal_acara }}</td>
            <td>{{ $a->instansi_id }}</td>
            <td>{{ $a->template_sertifikat }}</td>
            <td>
                <form action="{{ route('acara.destroy',$a->acara_id) }}" method="POST">
   
                    <!-- <a class="btn btn-info" href="{{ route('acara.show',$a->acara_id) }}">Show</a> -->
    
                    <a class="btn btn-primary" href="{{ route('acara.edit',$a->acara_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $acara->links() !!}
    </div>
      
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">

<h1>DATA ACARA</h1>

<table border = 1  action="/Acara" method="post" align="center">
{{ csrf_field() }}

    <th>id</th>
    <th>nama_acara</th>
    <th>tanggal_acara</th>
    <th>instansi_id</th>
    <th>template_sertifikat</th>



</table>
<br/>
<p>
[<a href="acara/tambah">Tambah Data</a>]
</p>

</body>
</html> -->