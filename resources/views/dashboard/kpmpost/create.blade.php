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
  <form action="/dashboard/kpmpost" method="post">
    @csrf

    <div class="form-floating mb-1">
      <input type="text" name="NAMAKPM" class="form-control @error('NAMAKPM') is-invalid @enderror"  id="NAMAKPM" placeholder="name@example.com"  value="{{old('NAMAKPM')}}">
      <label for="NAMAKPM">Nama KPM</label>
        @error('NAMAKPM')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="ALAMAT" class="form-control @error('ALAMAT') is-invalid @enderror"  id="ALAMAT" placeholder="name@example.com"  value="{{old('ALAMAT')}}">
      <label for="ALAMAT">Alamat</label>
        @error('ALAMAT')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="number" name="NOKK" class="form-control @error('NOKK') is-invalid @enderror"  id="NOKK" placeholder="name@example.com"  value="{{old('NOKK')}}">
      <label for="NOKK">No. KK</label>
        @error('NOKK')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="number" name="NIK" class="form-control @error('NIK') is-invalid @enderror"  id="NIK" placeholder="name@example.com"  value="{{old('NIK')}}">
      <label for="NIK">NIK</label>
        @error('NIK')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="number" name="NOKKS" class="form-control @error('NOKKS') is-invalid @enderror"  id="NOKKS" placeholder="name@example.com"  value="{{old('NOKKS')}}">
      <label for="NOKKS">No KKS</label>
        @error('NOKKS')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="number" name="NILAI" class="form-control @error('NILAI') is-invalid @enderror"  id="NILAI" placeholder="name@example.com"  value="{{old('NILAI')}}">
      <label for="NILAI">Nilai</label>
        @error('NILAI')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="STATUS" class="form-control @error('STATUS') is-invalid @enderror"  id="STATUS" placeholder="name@example.com"  value="{{old('STATUS')}}">
      <label for="STATUS">Status</label>
        @error('STATUS')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="KET" class="form-control @error('KET') is-invalid @enderror"  id="KET" placeholder="name@example.com"  value="{{old('KET')}}">
      <label for="KET">Keterangan</label>
        @error('KET')
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