@extends('template')

@section('content')
    <h1>Detail</h1>
    <a href="/crud" class="btn btn-sm btn-primary mb-3">Kembali</a>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <td>{{$siswa->nama}}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{$siswa->kelas}}</td>
        </tr>
        <tr>
            <th>NIS</th>
            <td>{{$siswa->nis}}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{$siswa->jk}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{$siswa->alamat}}</td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td>{{$siswa->hobi}}</td>
        </tr>
    </table>
@endsection