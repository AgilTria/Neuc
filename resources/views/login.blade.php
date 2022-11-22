@extends('layout.app')

@section('content')
    <main>


        @if (session('failedLoginMessage'))
            <small class="has-text-danger">{{ session('failedLoginMessage') }}</small>
        @endif
        <form method="POST">
            @csrf
            <div class="column is-three-fifths is-offset-one-fifth">
                <h2 class="title is-4">Login</h2>
                <div>
                    <label for="">Email</label>
                    <input type="text" class="input" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <small class="has-text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" class="input" placeholder="Password" name="password">
                    @error('password')
                        <small class="has-text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <br>
                <button class="button is-success">Login</button>
            </div>
        </form>
    </main>
@endsection
