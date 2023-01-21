
@extends('layouts.app')

@section('title','Daftar user')

@section('content')
<div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
            <h2>Data user</h2>
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
          <th >nama</th>
          <th>email</th>
          <th>password</th>
        </tr>
    </div>
    </div>
             @foreach ($user as $item )
            <tr>
                <td>{{ ++$item }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                        
               
          </tr>
                @endforeach
        </table>
@endsection
