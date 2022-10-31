
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>PPDB | SMPN 2 Padang Batung</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    

      <!-- Bootstrap core CSS -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">

  
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Pendaftaran Peserta Didik Baru</h2>
      <p class="lead">SMPN 2 Padang Batung</p>
    </div>


      <div class="col-md-7 col-lg-8 container-fluid">
        <h4 class="mb-3">Identitas Siswa</h4>
        <form class="needs-validation" method="POST" action="/dashboard/insertppdb">
          @csrf
            <div class="col-lg-12">
              <label for="no_pendaftaran" class="form-label">Nomor Pendaftaran</label>
              <input type="text" class="form-control" id="no_pendaftaran" name="no_pendaftaran"  placeholder="" value="{{ $randomNumber }}" readonly>
            </div>

            <div class="col-lg-12 mt-3">
              <label for="nisn" class="form-label">NISN</label>
              <small class="text-danger">
                <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" class="text-danger" target="blank">Cari NISN anda pada link berikut </a>
              </small>
              <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" required value="{{ old('nisn') }}">
              @error('nis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik') }}">
              @error('nik')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
              @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required value="{{ old('tempat_lahir') }}">
              @error('tempat_lahir')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir') }}">
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
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            
            <div class="col-lg-12 mt-3">
              <label for="agama" class="form-label">Agama</label>
              <select name="agama" id="agama" data-placeholder="Pilih Agama" class="form-select @error('agama') is-invalid @enderror" required>
                <option value="Islam" selected disabled>--Pilih Agama--</option>
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
              <input name="alamat" id="alamat" cols="10" rows="1" required class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="telp" class="form-label">Nomor HP</label>
              <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp') }}">
              @error('telp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="nilai_raport" class="form-label">Rata-rata Nilai Raport</label>
              <input type="text" class="form-control @error('nilai_raport') is-invalid @enderror" id="nilai_raport" name="nilai_raport" value="{{ old('nilai_raport') }}">
              @error('nilai_raport')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            
            <div class="col-lg-12 mt-3">
              <label for="asal_sekolah" class="form-label">Sekolah Asal</label>
              <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}">
              @error('asal_sekolah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <h4 class="mb-3 mt-3">Identitas Orang Tua</h4>
            <div class="col-lg-12 mt-3">
              <label for="nama_ibu" class="form-label">Nama Ibu</label>
              <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" required value="{{ old('nama_ibu') }}">
              @error('nama_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="col-lg-12 mt-3">
              <label for="nama_ayah" class="form-label">Nama Ayah</label>
              <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" required value="{{ old('nama_ayah') }}">
              @error('nama_ayah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="telp_ortu" class="form-label">Nomor HP Orang Tua</label>
              <input type="number" class="form-control @error('telp_ortu') is-invalid @enderror" id="telp_ortu" name="telp_ortu" required value="{{ old('telp_ortu') }}">
              @error('telp_ortu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
              <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu" required value="{{ old('pekerjaan_ibu') }}">
              @error('pekerjaan_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-lg-12 mt-3">
              <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
              <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" required value="{{ old('pekerjaan_ayah') }}">
              @error('pekerjaan_ayah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Daftar</button>
        </form>
      </div>


  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>


    <script>
    $( '#agama' ).select2( {
      theme: "bootstrap-5",
      width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
      placeholder: $( this ).data( 'placeholder' ),
    } );
    </script>

    <script>
    $( '#jns_kelamin' ).select2( {
      theme: "bootstrap-5",
      width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
      placeholder: $( this ).data( 'placeholder' ),
    } );
    </script>
  </body>
</html>
