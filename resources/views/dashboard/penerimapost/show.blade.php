@extends('dashboard.layout.main')

@section('container')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> Nama : {{ $post->NAMA }}</h5>
    <p class="card-text">Alamat : {{ $post->ALAMAT }}</p>
    <p class="card-text">No. KK : {{ $post->NOKK }}</p>
    <p class="card-text">NIK : {{ $post->NIK }}</p>
    <a href="/dashboard/penerimabnpt" class="btn btn-primary">Kembali</a>
  </div>
</div>
    
@endsection