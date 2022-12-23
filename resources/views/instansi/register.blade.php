@extends("layout.app")

@section("content")
<div>
    <h1>Daftar Instansi</h1>
    <form action="">
        <div>
            <label class="label">Nama Instansi</label>
            <input class="input" type="text" placeholder="Masukkan nama lembaga/instansi">
        </div>
        <div>
            <label class="label">Nomor Lembaga</label>
            <input class="input" type="text" placeholder="Masukkan nomor lembaga/instansi">
        </div>
        <div>
            <label class="label">Alamat</label>
            <textarea class="textarea" placeholder="Masukkan alamat lembaga/instansi"></textarea>
        </div>
        <div>
            <label class="label">Email</label>
            <input class="input" type="email" placeholder="Masukkan email lembaga/instansi">
        </div>
        <div>
            <label class="label">Password</label>
            <input class="input" type="password" placeholder="Buat password akun">
        </div>
        <label class="checkbox">
            <input type="checkbox">
            Data yang dimasukkan sudah benar dan sesuai
        </label>
        <div class="field is-grouped">
            <p class="control">
                <a class="button is-primary">
                    Submit
                </a>
            </p>
            <p class="control">
                <a class="button is-light">
                    Cancel
                </a>
            </p>
        </div>
    </form>
</div>
@endsection