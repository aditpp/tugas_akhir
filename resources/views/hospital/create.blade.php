<!DOCTYPE html>
<html>
<head>
	<title>Add RS Rujukan Covid-19</title>

	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<style type="text/css">
  body{
    background-image: url(../gedungsate.jpg);
    background-size: cover;
  }
  table{
    margin-top: 30px;
    width: 80%;
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.2);
    border: 3px solid;
    text-align: center;
  }
</style>

<body>
	
    <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
<center>
<form method="post" action="{{ route('hospitals.store') }}">
  <table border="3">
    <thead><tr><td colspan="2" class="text-center"><h3>Tambah Rumah Sakit Rujukan Pasien COVID-19 di Bandung</h3></td></tr></thead>

    @csrf
    <tr>
      <td><label for="rumah_sakit">Rumah Sakit</label></td>
      <td><input type="text" class="form-control" name="rumah_sakit"/></td>
    </tr>
    <tr>
      <td><label for="kapasitas">Kapasitas</label></td>
      <td><input type="number" class="form-control" name="kapasitas"></td>
    </tr>
    <tr>
      <td><label for="alamat">Alamat</label></td>
      <td><textarea rows="5" columns="5" class="form-control" name="alamat"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" class="btn btn-secondary">Tambah Data</button></td>
    </tr>
  </table>
</form>
</center>
</body>
</html>