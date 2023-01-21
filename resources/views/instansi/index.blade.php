
@extends('layouts.app')

@section('title','Daftar Instansi')

@section('content')
<div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
            <h2>Data Instansi </h2>
            </div>
            <div class="float-end">
            <a class="btn btn-success" href="{{ route('instansi.create') }}">
               Tambah Data</a>
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
          <th >nama instansi</th>
          <th>is verify</th>
          <th>email</th>
        </tr>
    </div>
    </div>
             @foreach ($instansi as $item )
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$item->nama_instansi}}</td>
                <td>{{$item->sudah_terverifikasi == 1 ? 'sudah' : 'belum'}}</td>
                <td>{{$item->email}}</td>
                        
                <!-- <td> -->
                <!-- <form action="{{ route('instansi.destroy',$item->instansi_id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('instansi.edit',$item->instansi_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> -->
            <!-- </td> -->
                <!-- <td>{{$item->HP}}</td>
                <a href="#" class="button is-info is-rounded">Edit Data</a>
            <a href="#" class="button is-danger is-rounded">Hapus Data</a> -->
          </tr>
                @endforeach
        </table>
@endsection
