<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="mt-6"></section>
    <section class="m-3">
        <p class="is-size-3 has-text-centered has-text-weight-medium">Daftar Instansi</p>
    </section>
    <div class="columns is-narrow is-centered mt-6 mb-2">

            <a href="#" class="button is-success">Tambah Data</a>

        </div>

    <table class="table is-striped mx-auto">
        <tr>
            <thead>
                <th class="has-text-centered">instansi_id</th>
                <th class="has-text-centered">nama_instansi</th>
                <th class="has-text-centered">is_verify</th>
                <th class="has-text-centered">email</th>
                <th class="has-text-centered">password</th>
                <th class="has-text-centered">aksi</th>
        </tr>
        <tbody>
            {{-- @foreach ($instansis as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->NamaInstansi}}</td>
                <td>{{$item->Email}}</td>
                <td>{{$item->Alamat}}</td>
                <td>{{$item->NIP}}</td>
                <td>{{$item->HP}}</td>
                <a href="#" class="button is-info is-rounded">Edit Data</a>
            <a href="#" class="button is-danger is-rounded">Hapus Data</a>
            </tr>
                @endforeach --}}
            <tr>
                <td>01</td>
                <td>pt.ABC</td>
                <td>terverifikasi</td>
                <td>ABCeria@mail.com</td>
                <td>wer123487a</td>
                <td>
                    <a href="#" class="button is-info">Edit Data</a>
                    <a href="#" class="button is-danger">Hapus Data</a></td>
            </tr>
            <tr>
                <td>01</td>
                <td>pt.ABC</td>
                <td>terverifikasi</td>
                <td>ABCeria@mail.com</td>
                <td>wer123487a</td>
                <td>
                    <a href="#" class="button is-info">Edit Data</a>
                    <a href="#" class="button is-danger">Hapus Data</a></td>
            </tr>
            <tr>
                <td>01</td>
                <td>pt.ABC</td>
                <td>terverifikasi</td>
                <td>ABCeria@mail.com</td>
                <td>wer123487a</td>
                <td>
                    <a href="#" class="button is-info">Edit Data</a>
                    <a href="#" class="button is-danger">Hapus Data</a></td>
            </tr>
            </tbody>
        </table>
        <div class="columns is-narrow is-centered mt-6 mb-2">

            <a href="#" class="button is-success">Tambah Data</a>

        </div>
</body>
</html>
