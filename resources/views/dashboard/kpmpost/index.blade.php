@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">SIBANSOS KEC. LEUWIGOONG KAB. GARUT</h1>
  
</div>

  <div class="table-responsive">
    <a href="/dashboard/kpmpost/create" class="btn btn-primary mb-3">Tambah Data</a>
    {{-- //buat pencaria --}}
    <div class="col-md-6">
      <form action="/dashboard/kpmpost">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari berdasarkan nama agen" name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit" >Cari</button>
        </div>
      </form>
    </div>

    @if($kpms->count())
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Nama KPM</th>
          <th scope="col">Alamat</th>
          <th scope="col">No.KK</th>
          <th scope="col">NIK</th>
          <th scope="col">No. KKS</th>
          <th scope="col">Nilai</th>
          <th scope="col">Status</th>
          <th scope="col">Ket</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kpms as $kpm)     
        <tr>
          
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kpm->NAMAKPM }}</td>
          <td>{{ $kpm->ALAMAT }}</td>
          <td>{{ $kpm->NOKK}}</td>
          <td>{{ $kpm->NIK }}</td>
          <td>{{ $kpm->NOKKS }}</td>
          <td>{{ $kpm->NILAI }}</td>
          <td>{{ $kpm->STATUS }}</td>
          <td>{{ $kpm->KET }}</td>
          <td>
            {{-- <a href="/dashboard/agen/{{ $kpm->id }}" class="badge bg-info"> <span data-feather='eye'></span></a> --}}
            <a href="/dashboard/kpmpost/{{ $kpm->id }}/edit" class="badge bg-warning "> <span data-feather='edit'></span></a>
            <form action="/dashboard/kpmpost/{{ $kpm->id }}" method="post" class="d-inline">
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
    {{ $kpms->links() }}

  </div>
    
@endsection