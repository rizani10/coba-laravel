@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Data Siswa</h1>
    </div>

      <div class="col-lg">
          <form class="row g-3" method="POST" action="/dashboard/siswa">
            @csrf
            <div class="col-md-4">
              <label for="nis" class="form-label">NIS</label>
              <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" required value="{{ old('nis') }}">
              @error('nis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nisn" class="form-label">NISN</label>
              <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('nisn') }}">
              @error('nisn')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="kelas_id" class="form-label">Kelas</label>
              <select name="kelas_id" id="kelas_id" class="form-control" required>
                <option value="1" selected disabled>--Pilih Kelas--</option>
                @foreach ($kelas as $kls)
                  <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-4">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
              @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="col-md-4">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required value="{{ old('tempat_lahir') }}">
              @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir') }}">
              @error('tgl_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
              <select name="jns_kelamin" id="jns_kelamin" class="form-control" required>
                <option value="Laki-Laki" selected disabled>--Pilih Jenis Kelamin--</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="agama" class="form-label">Agama</label>
              <select name="agama" id="agama" class="form-control" required>
                <option value="Islam" selected disabled>--Pilih Agama--</option>
                <option value="Islam">Islam</option>
                <option value="Kristem">Kristem</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Kunghocu">Kunghocu</option>
                <option value="Kepercayaan Kepada Tuhan">Kepercayaan Kepada Tuhan</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="alamat" class="form-label">Alamat</label>
              <input name="alamat" id="alamat" cols="10" rows="1" required class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="telp" class="form-label">Nomor HP</label>
              <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp') }}">
              @error('telp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nik" class="form-label">NIK</label>
              <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik') }}">
              @error('nik')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="nama_ibu" class="form-label">Nama Ibu</label>
              <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" required value="{{ old('nama_ibu') }}">
              @error('nama_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="col-md-4">
              <label for="nama_ayah" class="form-label">Nama Ayah</label>
              <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" required value="{{ old('nama_ayah') }}">
              @error('nama_ayah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="telp_ortu" class="form-label">Nomor HP Orang Tua</label>
              <input type="number" class="form-control @error('telp_ortu') is-invalid @enderror" id="telp_ortu" name="telp_ortu" required value="{{ old('telp_ortu') }}">
              @error('telp_ortu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
              <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu" required value="{{ old('pekerjaan_ibu') }}">
              @error('pekerjaan_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
              <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" required value="{{ old('pekerjaan_ayah') }}">
              @error('pekerjaan_ayah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
      </div>
@endsection