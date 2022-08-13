@extends('header')

@section('container')

<div class="container-fluid">
           
            

    <div class="card bg-success">
        <div class="card-body text-info">
          <h4 class="text-white">Daftar KPM</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <form action="/kpm">
            <div class="input-group mt-3 mb-3">
              <input type="text" class="form-control" placeholder="Cari berdasarkan nama agen" name="search" value="{{ request('search') }}">
              <button class="btn btn-primary" type="submit" >Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @if($kpms->count())
      

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama KPM</th>
            <th scope="col">Alamat KPM</th>
            <th scope="col">No KK</th>
            <th scope="col">NIK</th>
            <th scope="col">No KKS</th>
            <th scope="col">Nilai</th>
            <th scope="col">Status</th>
            <th scope="col">Ket</th>
            
                             </tr>
        </thead>
        @foreach ($kpms as $kpm)
            
       
        <tbody>
          <tr>
            <th scope="row">{{ $loop->iteration}}</th>
            <td> {{ $kpm->NAMAKPM }} </td>
            <td>{{ $kpm->ALAMAT }}</td>
            <td>{{ $kpm->NOKK }}</td>
            <td>{{ $kpm->NIK }}</td>
            <td>{{ $kpm->NOKKS }}</td>
            <td>{{ $kpm->NILAI }}</td>
            <td>{{ $kpm->STATUS }}</td>
            <td>{{ $kpm->KET }}</td>
            
            </td>
          </tr>
          @endforeach
         
        </tbody>
        @else
        <p class="text-center fs-4" >Data Tidak Ditemukan</p>
    @endif
      </table>
      
      
      
</div>
    
@endsection