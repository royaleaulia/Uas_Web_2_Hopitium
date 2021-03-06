@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Pasien</h1>

<a href="{{ '/pasien' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($pasien as $pas)
	<form action={{ "/pasien/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_pasien" value="{{ $pas->id_pasien }}"> <br/>
		Nama Pasien <input type="text" required="required" name="nama_pasien" value="{{ $pas->nama_pasien }}"> <br/>
		Jenis Kelamin <input type="date" required="required" name="tanggal_lahir_pasien" value="{{ $pas->tanggal_lahir_pasien }}"> <br/>
		Alamat Pasien   <input type="text" required="required" name="alamat_pasien" value="{{ $pas->alamat_pasien  }}"> <br/>
		Jenis Kelamin Pasien  <input type="text" required="required" name="jenis_kelamin_pasien" value="{{ $pas->jenis_kelamin_pasien  }}"> <br/>
		No Telpon  <input type="text" required="required" name="no_telp_pasien" value="{{ $pas->no_telp_pasien  }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection