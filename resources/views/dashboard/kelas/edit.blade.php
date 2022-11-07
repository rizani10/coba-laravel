@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Data Kelas</h1>
    </div>
      <div class="col-lg-8">
          <form method="POST" action="/dashboard/ruangkelas/{{ $kelas->id }}">
            @csrf
            @method('PUT')
            <div class="col-lg">
              <label for="class" class="form-label">Nama Kelas</label>
              <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class" required value="{{ old('class', $kelas->class) }}">
              @error('class')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="col-lg mt-2">
              <label for="cari" class="form-label">Nama Wali Kelas</label>
              <select name="guru_id" id="cari" data-placeholder="Pilih Wali Kelas" class="form-select @error('guru_id') is-invalid @enderror" required>
                <option value="1" selected disabled>--Silahkan Pilih--</option>
                @foreach ($guru as $item)
                  @if (old('guru_id', $kelas->guru_id === $item->id))
                      
                      <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                  @else
                      <option value="{{ $item->id }}">{{ $item->nama }}</option>
                      
                  @endif
                @endforeach
              </select>
            </div>
            <div class="col-lg mt-3">
              <button type="submit" class="btn btn-primary">Ubah</button>
              <a href="/dashboard/ruangkelas" class="btn btn-secondary ">Kembali</a>
            </div>
          </form>
      </div>
    
@endsection

