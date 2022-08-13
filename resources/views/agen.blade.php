@extends('header')

@section('container')
</nav>
    
<div class="container-fluid">
   
    

    <div class="card bg-secondary">
        <div class="card-body text-info">
          <h3 class="text-white">Daftar Agen</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="/agen">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari berdasarkan nama agen" name="search" value="{{ request('search') }}">
              <button class="btn btn-primary" type="submit" >Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @if($agents->count())
      
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Agent</th>
            <th scope="col">No Izin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Penanggung Jawab/pemilik</th>
            <th scope="col">Ketarangan</th>
            
          </tr>
        </thead>
        @foreach ($agents as $agen)
        <tbody>
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $agen->NAMAAGEN }}</td>
            <td>{{ $agen->NOIZIN }}</td>
            <td>{{ $agen->ALAMAT }}</td>
            <td>{{ $agen->PJ }}</td>
            <td>{{ $agen->KET }}</td>
            
          </tr>
          @endforeach
        </tbody>
        @else
        <p class="text-center fs-4" >Data Tidak Ditemukan</p>
    @endif
      </table>
      
      
      
</div>    

@endsection