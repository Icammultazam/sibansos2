@extends('header')

@section('container')
    
<div class="container-fluid">
           
            

    <div class="card bg-secondary">
        <div class="card-body text-info">
          <h3 class="text-white">Jadwal Penyaluran</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <form action="/salur">
            <div class="input-group mt-3 mb-3">
              <input type="text" class="form-control" placeholder="Cari berdasarkan ewarong" name="search" value="{{ request('search') }}">
              <button class="btn btn-primary" type="submit" >Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @if($salurs->count())
      

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Desa</th>
            <th scope="col">Nama E Warong</th>
            <th scope="col">Tanggal Penyaluran</th>
            <th scope="col">Tempat Penyaluran</th>
    
           
          </tr>
        </thead>

        @foreach ($salurs as $salur)
        <tbody>
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$salur->NAMADESA  }}</td>
            <td>{{$salur->NAMAWAR0NG  }}</td>
            <td>{{$salur->TGL_PENYALURAN->format('d-m-Y')}}</td>
            <td>{{$salur->TEMPAT_SALUR}}</td>
          </tr>
          @endforeach
          
        </tbody>
        @else
        <p class="text-center fs-4" >Data Tidak Ditemukan</p>
    @endif
      </table>
      
      
      
</div>

@endsection