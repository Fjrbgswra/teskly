@extends('layout.main')

@section('title','Form Tambah Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
			    <h1 class="mt-3">Form Tambah Mahasiswa</h1>
                    <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                        Please fill a name
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                        Please fill a email
                        </div>@enderror
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">tanggal_lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir')}}">
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">
                        Please fill a Tanggal Lahir
                        </div>@enderror                    
                    </div>
                    <div class="form-group">
                        <label for="no_telp">no_telp</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp')}}">
                        @error('no_telp')
                        <div class="invalid-feedback">
                        Please fill a Nomor Telepon
                        </div>@enderror                    
                    </div>
                    <div class="form-group">
                    <label>Gender</label>
                    <div class="form-group">
                        <input type="radio" name="gender" value="Pria"> Pria<br>
                        <input type="radio" name="gender" value="Wanita"> Wanita
                    </div>
                    </div>
                    <!-- <div class="form-group">
			        <label">Foto Siswa</label>
			        <div class="form-group">
			            <input type="file" name="image" id="image" class="form-control">
			        </div>
			        </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
			</div>
		</div>	
	</div>

@endsection