@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">SIBANSOS KEC. LEUWIGOONG KAB. GARUT</h1>
  
</div>

  <div class="table-responsive">
    <a href="/dashboard/jadwal/create" class="btn btn-primary mb-3">Tambah Data</a>
    {{-- //buat pencaria --}}
    <div class="col-md-6">
      <form action="/dashboard/jadwal">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari berdasarkan nama warong" name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit" >Cari</button>
        </div>
      </form>
    </div>

    @if($jadwals->count())
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Nama Desa</th>
          <th scope="col">Nama Warong</th>
          <th scope="col">Tanggal Penyaluran</th>
          <th scope="col">Tempat Penyaluran</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($jadwals as $jadwal)     
        <tr>
          
          <td>{{ $loop->iteration }}</td>
          <td>{{ $jadwal->NAMADESA }}</td>
          <td>{{ $jadwal->NAMAWAR0NG }}</td>
          <td>{{ $jadwal->TGL_PENYALURAN }}</td>
          <td>{{ $jadwal->TEMPAT_SALUR}}</td>
          <td>
            {{-- <a href="/dashboard/agen/{{ $jadwal->id }}" class="badge bg-info"> <span data-feather='eye'></span></a> --}}
            <a href="/dashboard/jadwal/{{ $jadwal->id }}/edit" class="badge bg-warning "> <span data-feather='edit'></span></a>
            <form action="/dashboard/jadwal/{{ $jadwal->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Yakin Hapus Data ?')"><span data-feather='x-circle'></span></button>
            </form>
            
          </td>
        </tr>
        @endforeach
        
      </tbody>
      @else
      <p class="text-center fs-4" >Data Tidak Ditemukan</p>
      @endif
    </table>
  </div>
  <div class="d-flex justify-content-end">
    {{ $jadwals->links() }}

  </div>
    
@endsection