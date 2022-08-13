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
  <form action="/dashboard/agen" method="post">
    @csrf

    <div class="form-floating mb-1">
      <input type="text" name="NAMAAGEN" class="form-control @error('NAMAAGEN') is-invalid @enderror"  id="NAMAAGEN" placeholder="name@example.com"  value="{{old('NAMAAGEN')}}">
      <label for="NAMAAGEN">Nama Agent</label>
        @error('NAMAAGEN')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="NOIZIN" class="form-control @error('NOIZIN') is-invalid @enderror"  id="NOIZIN" placeholder="name@example.com"  value="{{old('NOIZIN')}}">
      <label for="NOIZIN">No Izin</label>
        @error('NOIZIN')
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
      <input type="text" name="PJ" class="form-control @error('PJ') is-invalid @enderror"  id="PJ" placeholder="name@example.com"  value="{{old('PJ')}}">
      <label for="PJ">Penanggung Jawab</label>
        @error('PJ')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
      <input type="text" name="KET" class="form-control @error('KET') is-invalid @enderror"  id="KET" placeholder="name@example.com"  value="{{old('KET')}}">
      <label for="KET">Ket</label>
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