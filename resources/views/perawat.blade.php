@extends('layouts.main')

@section('container')
    <h1>Halaman Perawat</h1>
    <div>
        <a href="{{ '/create_dokter' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Nama Perawat</th>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                @foreach ($perawat as $per)
                <tr>  
                    <td>{{ $per->nama_perawat}}</td>
                    <td>{{ $per->jenis_kelamin }}</td>
                    <td>{{ $per->alamat_pasien}}</td>
                </tr>
              @endforeach
            </tr>
        </table>
    </div>
@endsection