@extends('header')

@section('container')
</nav>
    
<div class="container-fluid">
   
    

    <div class="card bg-secondary">
        <div class="card-body text-info">
          <h3 class="text-white">Daftar Agen</h3>
        </div>
      </div>
      

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama agent</th>
            <th scope="col">No Izin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Penanggung Jawab/pemilik</th>
            <th scope="col">Ketarangan</th>
           
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Warong ABC</td>
            <td>45454Cfgfd</td>
            <td>Kp. Sarkanjut</td>
            <td>Abdul Syukur</td>
            <td>Ket</td>
            
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Warong Ibrahim</td>
            <td>45454Cfgfd</td>
            <td>Kp.Cigadung</td>
            <td>Mariam</td>
            <td>Ket</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Warong Marjinah</td>
            <td>45454Cfgfd</td>
            <td>Kp. Sarleuleus</td>
            <td>Iyom Kristi</td>
            <td>Ket</td>
          </tr>
        </tbody>
      </table>
      
      
      
</div>    

@endsection