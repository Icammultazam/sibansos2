@extends('header')

@section('container')

<div class="container-fluid">
  <div class="card-header">
    <h3>Daftar Penerima BNPT, PKH, PBI</h3>
    <div class="row">
                  <div class="col-md-6">
                    <form action="/bnpt">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari berdasarkan No.KK/NIK" name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit" >Cari</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              @if($post->count())
              <table class="table table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat & Tgl. Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">No KK</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No KKS</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $item)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->NAMA }}</td>
                    <td>{{ $item->TEMPAT_LAHIR }},  {{$item->TGL_LAHIR->format('d-m-Y')}}</td>
                    <td>{{ $item->ALAMAT}}</td>
                    <td>{{ $item->PEKERJAAN}}</td>
                    <td>{{ $item->NOKK }}</td>
                    <td>{{ $item->NIK }}</td>
                    <td>{{ $item->NOKKS }}</td>
                    <td>{{ $item->KET }}</td>
                    
                  </tr>
                  @endforeach

                  
                </tbody>
                @else
                    <p class="text-center fs-4" >Data Tidak Ditemukan</p>
                @endif
              </table>
              <div class="d-flex justify-content-end">
                {{ $post->links() }}

              </div>
              
        </div>

   
      
    </div>     
    @endsection
