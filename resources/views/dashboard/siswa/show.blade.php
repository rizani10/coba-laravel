@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Lihat data, {{ $siswa->nama }}</h1>
    </div>

      <div class="col-lg">
          <form class="row g-3" method="POST" action="/dashboard/siswa/{{ $siswa->id }}">
            @method("PUT")
            @csrf
            <div class="col-md-4">
              <label for="nis" class="form-label">NIS</label>
              <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" required value="{{ old('nis', $siswa->nis) }}" readonly>
              @error('nis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nisn" class="form-label">NISN</label>
              <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('nisn', $siswa->nisn) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="kelas_id" class="form-label">Kelas</label>
              <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('kelas', $siswa->kelas->class) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama',  $siswa->nama) }}" readonly>
              @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="col-md-4">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" readonly>
              @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir', $siswa->tgl_lahir) }}" readonly>
              @error('tgl_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('jns_kelamin', $siswa->jns_kelamin) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="agama" class="form-label">Agama</label>
              <input type="agama" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('agama', $siswa->agama) }}" readonly>
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="alamat" class="form-label">Alamat</label>
              <input name="alamat" id="alamat" cols="10" rows="1" required class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $siswa->alamat) }}" readonly>
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="telp" class="form-label">Nomor HP</label>
              <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp', $siswa->telp) }}" readonly>
              @error('telp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $siswa->email) }}" readonly>
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nik" class="form-label">NIK</label>
              <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', $siswa->nik) }}" readonly>
              @error('nik')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nama_ibu" class="form-label">Nama Ibu</label>
              <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" required value="{{ old('nama_ibu', $siswa->nama_ibu) }}" readonly>
              @error('nama_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="col-md-4">
              <label for="nama_ayah" class="form-label">Nama Ayah</label>
              <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" required value="{{ old('nama_ayah' , $siswa->nama_ayah) }}" readonly>
              @error('nama_ayah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="telp_ortu" class="form-label">Nomor HP Orang Tua</label>
              <input type="number" class="form-control @error('telp_ortu') is-invalid @enderror" id="telp_ortu" name="telp_ortu" required value="{{ old('telp_ortu' , $siswa->telp_ortu) }}" readonly>
              @error('telp_ortu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
              <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu" required value="{{ old('pekerjaan_ibu', $siswa->pekerjaan_ibu) }}" readonly>
              @error('pekerjaan_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
              <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" required value="{{ old('pekerjaan_ayah', $siswa->pekerjaan_ayah) }}" readonly>
              @error('pekerjaan_ayah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-12">
              <a href="/dashboard/siswa" class="btn btn-success">
                <span data-feather="arrow-left"></span> Kembali
              </a>
            </div>
          </form>
      </div>
@endsection