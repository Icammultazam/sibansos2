@extends('header')

@section('container')
    
<div class="container-fluid">
           
            

    <div class="card bg-secondary">
        <div class="card-body text-info">
          <h3 class="text-white">Jadwal Penyaluran</h3>
        </div>
      </div>
      

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
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Karangsari</td>
            <td>Warung ABC</td>
            <td>12 Juni 2022</td>
            <td>Bale Desa</td>
            
            
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Leuwigoong</td>
            <td>Warung Jinah</td>
            <td>11 Juni 2022</td>
            <td>Lapang Bola</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sindangsari</td>
            <td>Warung Sae</td>
            <td>22 Juni 2022</td>
            <td>Bale Desa</td>
          </tr>
        </tbody>
      </table>
      
      
      
</div>

@endsection