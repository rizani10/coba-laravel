@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Data Guru</h1>
    </div>

      <div class="col-lg">
          <form class="row g-3" method="POST" action="/dashboard/guru/{{ $guru->id }}">
            @csrf
            @method('PUT')
            <div class="col-md-6">
              <label for="nip" class="form-label">NIP</label>
              <input type="number" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $guru->nip) }}">
              @error('nip')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="nuptk" class="form-label">NUPTK</label>
              <input type="number" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk" value="{{ old('nuptk', $guru->nuptk) }}">
              @error('nuptk')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="nik" class="form-label">NIK</label>
              <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', $guru->nik) }}">
              @error('nik')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $guru->nama) }}">
              @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="col-md-6">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required value="{{ old('tempat_lahir', $guru->tempat_lahir) }}">
              @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir', $guru->tgl_lahir) }}">
              @error('tgl_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
              <select name="jns_kelamin" id="jns_kelamin" class="form-select @error('jns_kelamin') is-invalid @enderror" required>
                <option value="Laki-Laki" selected disabled>--Pilih Jenis Kelamin--</option>
                @if (old('jns_kelamin', $guru->jns_kelamin))
                    <option value="{{ $guru->jns_kelamin }}" selected>{{ $guru->jns_kelamin }}</option>
                @endif
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="agama" class="form-label">Agama</label>
              <select name="agama" id="agama" data-placeholder="Pilih Wali Kelas" class="form-select @error('agama') is-invalid @enderror" required>

                <option value="Islam" selected disabled>--Pilih Agama--</option>
                @if (old('agama', $guru->agama))
                    <option value="{{ $guru->agama }}" selected>{{ $guru->agama }}</option>
                @endif
                    <option value="Islam">Islam</option>
                    <option value="Kristem">Kristem</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kunghocu">Kunghocu</option>
                    <option value="Kepercayaan Kepada Tuhan">Kepercayaan Kepada Tuhan</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="alamat" class="form-label">Alamat</label>
              <input name="alamat" id="alamat" cols="10" rows="1" required class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $guru->alamat) }}">
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="telp" class="form-label">Nomor HP</label>
              <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp', $guru->telp) }}">
              @error('telp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $guru->email) }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="jabatan" class="form-label">Jabatan</label>
              <select name="jabatan" id="cari" data-placeholder="Pilih Jabatan" class="form-select @error('jabatan') is-invalid @enderror" required>
                <option value="" selected disabled>--Silahkan Pilih--</option>
                @if (old('jabatan', $guru->jabatan))
                    <option value="{{ $guru->jabatan }}" selected>{{ $guru->jabatan }}</option>
                    
                  @endif
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Guru Mata Pelajaran">Guru Mata Pelajaran</option>
                    <option value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
                    <option value="Operator Sekolah">Operator Sekolah</option>
                    <option value="Pustakawan">Pustakawan</option>
                    <option value="Tenaga Kebersihan">Tenaga Kebersihan</option>
                    <option value="Penjaga Malam">Penjaga Malam</option>
              </select>
            
            <div class="col-lg mt-3">
              <button type="submit" class="btn btn-primary">Ubah</button>
              <a href="/dashboard/guru" class="btn btn-secondary">Kembali</a>
            </div>
          </form>
      </div>
@endsection