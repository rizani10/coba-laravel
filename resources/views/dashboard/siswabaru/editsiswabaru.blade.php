@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Siswa Baru</h1>
    </div>

    <a href="/dashboard/newstudent"  class="btn btn-primary mb-3"> <span data-feather="arrow-left"></span> Kembali</a>
    
    

    {{-- pesan post baru berhasil ditambah --}}
    <div class="col-lg-12">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    {{-- ambil semua data posts dalam bentuk tabel --}}
    <div class="card col-lg-12">
        <div class="card-header">
            Tabel Data Siswa Baru
        </div>
            <div class="card-body">
              <main>
                <div class="py-5 text-center">
                  <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                  <h2>Pendaftaran Peserta Didik Baru</h2>
                  <p class="lead">SMPN 2 Padang Batung</p>
                </div>
            
            
                  <div class="col-md-7 col-lg-8 container-fluid">
                    <h4 class="mb-3">Identitas Siswa</h4>
                    <form class="needs-validation" method="POST" action="/dashboard/newstudent/{{ $siswabaru->id }}">
                      @csrf
                      @method('PUT')
                        <div class="col-lg-12">
                          <label for="no_pendaftaran" class="form-label">Nomor Pendaftaran</label>
                          <input type="text" class="form-control" id="no_pendaftaran" name="no_pendaftaran"  placeholder="" value="{{ $siswabaru->no_pendaftaran }}" readonly>
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="nisn" class="form-label">NISN</label>
                          <small class="text-danger">
                            <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" class="text-danger" target="blank">Cari NISN anda pada link berikut </a>
                          </small>
                          <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('nisn', $siswabaru->nisn) }}">
                          @error('nis')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="nik" class="form-label">NIK</label>
                          <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', $siswabaru->nik) }}">
                          @error('nik')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $siswabaru->nama) }}">
                          @error('nama')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                          <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required value="{{ old('tempat_lahir', $siswabaru->tempat_lahir) }}">
                          @error('tempat_lahir')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                          <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir', $siswabaru->tgl_lahir) }}">
                          @error('tgl_lahir')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
                          <select name="jns_kelamin" id="jns_kelamin" class="form-select @error('jns_kelamin') is-invalid @enderror" required>
                            <option value="Laki-Laki" selected disabled>--Pilih Jenis Kelamin--</option>
                            @if (old('jns_kelamin', $siswabaru->jns_kelamin))
                                <option value="{{ $siswabaru->jns_kelamin }}" selected>{{ $siswabaru->jns_kelamin }}</option>
                            @endif
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                        
                        <div class="col-lg-12 mt-3">
                          <label for="agama" class="form-label">Agama</label>
                          <select name="agama" id="agama" data-placeholder="Pilih Agama" class="form-select @error('agama') is-invalid @enderror" required>
                            <option value="Islam" selected disabled>--Pilih Agama--</option>
                            @if (old('agama', $siswabaru->agama))
                                <option value="{{ $siswabaru->agama }}" selected>{{ $siswabaru->agama }}</option>
                            @endif
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Kunghocu">Kunghocu</option>
                              <option value="Kepercayaan Kepada Tuhan">Kepercayaan Kepada Tuhan</option>
                          </select>
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <input name="alamat" id="alamat" cols="10" rows="1" required class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $siswabaru->alamat) }}">
                          @error('alamat')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="telp" class="form-label">Nomor HP</label>
                          <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp', $siswabaru->telp) }}">
                          @error('telp')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                          @error('email', $siswabaru->email)
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="nilai_raport" class="form-label">Rata-rata Nilai Raport</label>
                          <input type="text" class="form-control @error('nilai_raport') is-invalid @enderror" id="nilai_raport" name="nilai_raport" value="{{ old('nilai_raport', $siswabaru->nilai_raport) }}">
                          @error('nilai_raport')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        
                        <div class="col-lg-12 mt-3">
                          <label for="asal_sekolah" class="form-label">Sekolah Asal</label>
                          <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah', $siswabaru->asal_sekolah) }}">
                          @error('asal_sekolah')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <h4 class="mb-3 mt-3">Identitas Orang Tua</h4>
                        <div class="col-lg-12 mt-3">
                          <label for="nama_ibu" class="form-label">Nama Ibu</label>
                          <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" required value="{{ old('nama_ibu', $siswabaru->nama_ibu) }}">
                          @error('nama_ibu')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="col-lg-12 mt-3">
                          <label for="nama_ayah" class="form-label">Nama Ayah</label>
                          <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" required value="{{ old('nama_ayah', $siswabaru->nama_ayah) }}">
                          @error('nama_ayah')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="telp_ortu" class="form-label">Nomor HP Orang Tua</label>
                          <input type="number" class="form-control @error('telp_ortu') is-invalid @enderror" id="telp_ortu" name="telp_ortu" required value="{{ old('telp_ortu', $siswabaru->telp_ortu) }}">
                          @error('telp_ortu')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                          <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu" required value="{{ old('pekerjaan_ibu', $siswabaru->pekerjaan_ibu) }}">
                          @error('pekerjaan_ibu')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
            
                        <div class="col-lg-12 mt-3">
                          <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                          <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" required value="{{ old('pekerjaan_ayah', $siswabaru->pekerjaan_ayah) }}">
                          @error('pekerjaan_ayah')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Ubah</button>
                    </form>
                  </div>
            
            
              </main>
            </div>
        </div>
    </div>
    
@endsection
