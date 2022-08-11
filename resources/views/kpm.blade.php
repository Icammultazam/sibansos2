@extends('header')

@section('container')

<div class="container-fluid">
           
            

    <div class="card bg-success">
        <div class="card-body text-info">
          <h3 class="text-white">Daftar KPM</h3>
        </div>
      </div>
      

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama KPM</th>
            <th scope="col">Alamat KPM</th>
            <th scope="col">No KK</th>
            <th scope="col">NIK</th>
            <th scope="col">No KKS</th>
            <th scope="col">Status</th>
            
                             </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> Wastro </td>
            <td>Kp. Sarkanjut</td>
            <td>987987987</td>
            <td>954987497</td>
            <td>09380980980980980</td>
            <td> 
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">
                Rp. 250.000,-
              </button>
            </td>
            
          </tr>
          <tr>
            <th scope="row">1</th>
            <td> Warsih </td>
            <td>Kp.Cibingbin</td>
            <td>987987987</td>
            <td>954987497</td>
            <td>09380980980980980</td>
            <td> 
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Saldo Nol
              </button>
            </td>
            
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Joni </td>
            <td>Kp.Cikoang</td>
            <td>987987987</td>
            <td>954987434</td>
            <td>09380980980980980</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Kartu Ruksak
              </button>

            </td>>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jokowi Iskandar </td>
            <td>Kp. Sarleuleus</td>
            <td>987987987</td>
            <td>954987434</td>
            <td>09380980980980980</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                Error
              </button>

            </td>>
          </tr>
        </tbody>
      </table>
      
      
      
</div>
    
@endsection