@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">SIBANSOS KEC. LEUWIGOONG KAB. GARUT</h1>
  
</div>

  <div class="table-responsive">
    <a href="/dashboard/agen/create" class="btn btn-primary mb-3">Tambah Data</a>
    {{-- //buat pencaria --}}
    <div class="col-md-6">
      <form action="/dashboard/agen">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari berdasarkan nama agen" name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit" >Cari</button>
        </div>
      </form>
    </div>

    @if($agents->count())
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Nama Agent</th>
          <th scope="col">No.Izin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Penanggung Jawab</th>
          <th scope="col">Ket</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($agents as $agent)     
        <tr>
          
          <td>{{ $loop->iteration }}</td>
          <td>{{ $agent->NAMAAGEN }}</td>
          <td>{{ $agent->NOIZIN }}</td>
          <td>{{ $agent->ALAMAT }}</td>
          <td>{{ $agent->PJ }}</td>
          <td>{{ $agent->KET }}</td>
          <td>
            {{-- <a href="/dashboard/agen/{{ $agent->id }}" class="badge bg-info"> <span data-feather='eye'></span></a> --}}
            <a href="/dashboard/agen/{{ $agent->id }}/edit" class="badge bg-warning "> <span data-feather='edit'></span></a>
            <form action="/dashboard/agen/{{ $agent->id }}" method="post" class="d-inline">
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
    {{ $agents->links() }}

  </div>
    
@endsection