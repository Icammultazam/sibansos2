@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mborder-bottom">
    <h1 class="h2 ">Edit Data</h1>
    
  </div>
@if(session()->has('berhasil'))
<div class="alert alert-success" role="alert">
    {{ session('berhasil') }}
</div>
@endif

<div class="col-lg-8">
<main class="form-signin w-100 m-auto">
  <form action="/dashboard/penerimabnpt/{{ $post->id }}" method="post">
    @method('put')
    @csrf

    <div class="form-floating mb-1">
      <input type="text" name="NAMA" class="form-control @error('NAMA') is-invalid @enderror"  id="NAMA" placeholder="name@example.com"  value="{{old('NAMA', $post->NAMA)}}">
      <label for="NAMA">Nama</label>
        @error('NAMA')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="TEMPAT_LAHIR" class="form-control @error('TEMPAT_LAHIR') is-invalid @enderror"  id="TEMPAT_LAHIR" placeholder="name@example.com"  value="{{old('TEMPAT_LAHIR', $post->TEMPAT_LAHIR)}}">
      <label for="TEMPAT_LAHIR">Tempat Lahir</label>
        @error('TEMPAT_LAHIR')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="date" name="TGL_LAHIR" class="form-control @error('TGL_LAHIR') is-invalid @enderror"  id="TGL_LAHIR" placeholder="name@example.com"  value="{{old('TGL_LAHIR', $post->TGL_LAHIR)}}">
      <label for="TGL_LAHIR">Tanggal Lahir</label>
        @error('TGL_LAHIR')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="ALAMAT" class="form-control @error('ALAMAT') is-invalid @enderror"  id="ALAMAT" placeholder="name@example.com"  value="{{old('ALAMAT', $post->ALAMAT)}}">
      <label for="ALAMAT">Alamat</label>
        @error('ALAMAT')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="PEKERJAAN" class="form-control @error('PEKERJAAN') is-invalid @enderror"  id="PEKERJAAN" placeholder="name@example.com"  value="{{old('PEKERJAAN', $post->PEKERJAAN)}}">
      <label for="PEKERJAAN">Pekerjaan</label>
        @error('PEKERJAAN')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="NOKK" class="form-control @error('NOKK') is-invalid @enderror"  id="NOKK" placeholder="name@example.com"  value="{{old('NOKK', $post->NOKK)}}">
      <label for="NOKK">No.KK</label>
        @error('NOKK')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="number" name="NIK" class="form-control @error('NIK') is-invalid @enderror"  id="NIK" placeholder="name@example.com"  value="{{old('NIK', $post->NIK)}}">
      <label for="NIK">NIK</label>
        @error('NIK')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="NOKKS" class="form-control @error('NOKKS') is-invalid @enderror"  id="NOKKS" placeholder="name@example.com"  value="{{old('NOKKS', $post->NOKKS)}}">
      <label for="NOKKS">No.KKS</label>
        @error('NOKKS')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="KET" class="form-control @error('KET') is-invalid @enderror"  id="KET" placeholder="name@example.com"  value="{{old('KET', $post->KET)}}">
      <label for="KET">Ket</label>
        @error('KET')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    
    

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Update Data</button>
   

  </form>
</main>
</div>



@endsection