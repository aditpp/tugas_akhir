<!DOCTYPE html>
<html>
<head>
	<title>RS Rujukan Covid-19 Bandung</title>

	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<style>
    body{
      background-image: url(gedungsate.jpg);
      background-position: center center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }
    table{
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0, 0.4);
    }
    .bck{

    }
  	.upe{
      margin-top: 40px;
    }
    .btn-secondary{
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0, 0.3);
    }
    p{
      font-size: 20px;
    }
	</style>
</head>
<div class="bck">
<body>

<div class="container">

  <center><h1>Rumah Sakit Rujukan Pasien COVID-19</h1></center>

  <p><center><font color="white">Berikut dibawah ini adalah daftar Rumah Sakit Rujukan pasien COVID-19 di daerah Bandung dan sekitarnya</font></center></p>

  <a href="{{ url('/covids') }}" class="btn btn-secondary">Kembali</a>
  <a href="{{ url('hospitals/create') }}"><div class="btn btn-secondary">Tambah Data</div></a><br/>

  <br>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table text-center text-white" border="3">
    <thead>
        <tr>
          <td>Rumah Sakit</td>
          <td>Kapasitas</td>
          <td>Alamat</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($rumahsakit as $RS)
        <tr>
            <td>{{$RS->rumah_sakit}}</td>
            <td>{{$RS->kapasitas}}</td>
            <td>{{$RS->alamat}}</td>
            <td><a href="{{ route('hospitals.edit', $RS->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('hospitals.destroy', $RS->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
</div>
</body>
</div>
</html>