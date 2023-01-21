@extends('layouts.app')

@section('content')

       
    </div>       
    <div class="container">
        <div >
            <h1 style="color:#222222;" class="is-size-3 has-text-weight-bold has-text-centered">Validasi Sertifikat</h1>
        </div>
        <form action="">
            <div class="field is-grouped">
            <div class="mb-3">
                <div class="control is-expanded">
                    <input type="text" name="" class="form-control" placeholder="Masukkan Kode Validasi">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Check</button>
                </div>
            </div>
        </form>
        <main class="py-4">
            @yield('content')
        </main>
    </div>


@endsection
