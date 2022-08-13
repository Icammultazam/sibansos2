@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">SIBANSOS KEC. LEUWIGOONG KAB. GARUT</h1>
  
</div>

  <div class="table-responsive">
    <a href="/dashboard/penerimabnpt/create" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="col-md-6">
      <form action="/bnpt">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari berdasarkan No.KK/NIK/No.KKS" name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit" >Cari</button>
        </div>
      </form>
    </div>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Nama</th>
          <th scope="col">Tempat & Tgl.Lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col">Pekerjaan</th>
          <th scope="col">No.KK</th>
          <th scope="col">NIK</th>
          <th scope="col">No.KKS</th>
          <th scope="col">Ket</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($penerimas as $penerima)     
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $penerima->NAMA }}</td>
          <td>{{ $penerima->TEMPAT_LAHIR. ',  '. $penerima->TGL_LAHIR }}</td>
          <td>{{ $penerima->ALAMAT }}</td>
          <td>{{ $penerima->PEKERJAAN }}</td>
          <td>{{ $penerima->NOKK }}</td>
          <td>{{ $penerima->NIK }}</td>
          <td>{{ $penerima->NOKKS }}</td>
          <td>{{ $penerima->KET }}</td>
          <td>
            <a href="/dashboard/penerimabnpt/{{ $penerima->id }}" class="badge bg-info"> <span data-feather='eye'></span></a>
            <a href="/dashboard/penerimabnpt/{{ $penerima->id }}/edit" class="badge bg-warning "> <span data-feather='edit'></span></a>
            <form action="/dashboard/penerimabnpt/{{ $penerima->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Yakin Hapus Data ?')"><span data-feather='x-circle'></span></button>
            </form>
            
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
    
@endsection