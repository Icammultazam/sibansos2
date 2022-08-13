@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mborder-bottom">
    <h1 class="h2 ">Tambah Data</h1>
    
  </div>
@if(session()->has('berhasil'))
<div class="alert alert-success" role="alert">
    {{ session('berhasil') }}
</div>
@endif

<div class="col-lg-8">
<main class="form-signin w-100 m-auto">
  <form action="/dashboard/jadwal/{{ $jadwal->id }}" method="post">
    @method('put')
    @csrf

    <div class="form-floating mb-1">
      <input type="text" name="NAMADESA" class="form-control @error('NAMADESA') is-invalid @enderror"  id="NAMADESA" placeholder="name@example.com"  value="{{old('NAMADESA', $jadwal->NAMADESA)}}">
      <label for="NAMADESA">Nama Desa</label>
        @error('NAMADESA')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="NAMAWAR0NG" class="form-control @error('NAMAWAR0NG') is-invalid @enderror"  id="NAMAWAR0NG" placeholder="name@example.com"  value="{{old('NAMAWAR0NG', $jadwal->NAMAWAR0NG)}}">
      <label for="NAMAWAR0NG">Nama Warong</label>
        @error('NAMAWAR0NG')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="date" name="TGL_PENYALURAN" class="form-control @error('TGL_PENYALURAN') is-invalid @enderror"  id="TGL_PENYALURAN" placeholder="name@example.com"  value="{{old('TGL_PENYALURAN',$jadwal->TGL_PENYALURAN)}}">
      <label for="TGL_PENYALURAN">Tanggal Penyaluran</label>
        @error('TGL_PENYALURAN')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="TEMPAT_SALUR" class="form-control @error('TEMPAT_SALUR') is-invalid @enderror"  id="TEMPAT_SALUR" placeholder="name@example.com"  value="{{old('TEMPAT_SALUR', $jadwal->TEMPAT_SALUR)}}">
      <label for="TEMPAT_SALUR">Tempat Penyaluran</label>
        @error('TEMPAT_SALUR')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    
    
    

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Simpan</button>
   

  </form>
</main>
</div>



@endsection