@extends('layout.app')

@section('title','SMK BARUMEKTA BANTUL')

@section('content')
    <form>
            <div class="mx-6">
                <label>Nama Instansi</label>
                <div class="field">
                    <p class="control has-icons-left">
                      <input class="input" type="instansi" placeholder="Pimjo Labs">
                      <span class="icon is-small is-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                      </span>
                    </p>
                </div>
                <label>Alamat</label>
                <div class="field">
                    <p class="control has-icons-left">
                      <input class="input" type="alamat" placeholder="Jl. AM. Sangaji">
                      <span class="icon is-small is-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                          </svg>
                      </span>
                    </p>
                </div>
                <label>Email</label>
                <div class="field">
                    <p class="control has-icons-left">
                      <input class="input" type="email" placeholder="example@mail.com">
                      <span class="icon is-small is-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                          </svg>
                      </span>
                    </p>
                </div>
                <label>Status</label>
                <div class="control">
                    <label class="radio">
                      <input type="radio" name="aktif">
                      Activate
                    </label>
                    <label class="radio">
                      <input type="radio" name="deaktif">
                      Deactive
                    </label>
                  </div>
            </div>
        <div class="py-6 mx-6">
            <button class="button is-primary is-rounded px-6 mr-6">Simpan</button>

            <button class="button is-danger is-rounded px-6 mx-6">Hapus</button>
        </div>
    </form>
@endsection
