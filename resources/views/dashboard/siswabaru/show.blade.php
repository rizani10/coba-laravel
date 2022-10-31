{{-- @extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Nilai, {{ $nilai->siswa->nama }}</h1>
    </div>

    <a href="/dashboard/nilai/create"  class="btn btn-primary mb-3"> <span data-feather="plus-circle"></span> Tambah</a>
    
    

    <div class="col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="card col-lg-8">
        <div class="card-header">
            Tabel Nilai, {{ $siswa->nama }}
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection --}}

{{ $siswa->nilai->nilai_uts }}
