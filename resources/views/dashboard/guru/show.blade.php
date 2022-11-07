@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Lihat data, {{ $guru->nama }}</h1>
    </div>

      <div class="col-lg">
          <form class="row g-3" method="POST" action="/dashboard/siswa/{{ $guru->id }}">
            @method("PUT")
            @csrf
            <div class="col-md-4">
              <label for="nip" class="form-label">NIP</label>
              <input type="number" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required value="{{ old('nip', $guru->nip) }}" readonly>
              @error('nip')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nuptk" class="form-label">NUPTK</label>
              <input type="number" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk" required value="{{ old('nuptk', $guru->nuptk) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="kelas_id" class="form-label">NIK</label>
              <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('nik', $guru->nik) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama',  $guru->nama) }}" readonly>
              @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="col-md-4">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required value="{{ old('tempat_lahir', $guru->tempat_lahir) }}" readonly>
              @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir', $guru->tgl_lahir) }}" readonly>
              @error('tgl_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('jns_kelamin', $guru->jns_kelamin) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="agama" class="form-label">Agama</label>
              <input type="agama" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('agama', $guru->agama) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="alamat" class="form-label">Alamat</label>
              <input name="alamat" id="alamat" cols="10" rows="1" required class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $guru->alamat) }}" readonly>
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="telp" class="form-label">Nomor HP</label>
              <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp', $guru->telp) }}" readonly>
              @error('telp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $guru->email) }}" readonly>
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nama_ibu" class="form-label">Jabatan</label>
              <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" required value="{{ old('jabatan', $guru->jabatan) }}" readonly>
              @error('nama_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="col-12">
              <a href="/dashboard/guru" class="btn btn-success">
                <span data-feather="arrow-left"></span> Kembali
              </a>
            </div>
          </form>
      </div>
@endsection