@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Info Covid-19 Indonesia</title>


<style>
body{

	background-color: lightblue;
}
    table{
    margin-top: 40px;
    size: 30px;
    width: 70%;
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.2);
  }
  tr, td{
    border: 0;
  }
</style>
</head>
<body>
<center>
  <table border="3" cellpadding="10">
  <tr><td colspan="2"><center><b>Tambah Data COVID-19</b></center></td></tr>

  <tr>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  </tr>

      <form method="post" action="{{ route('covids.store') }}">
          
              @csrf
              <tr>
                  <td><label for="wilayah">Wilayah</label></td>
                  <td><input type="text" class="form-control" name="wilayah"/></td>
              </tr>

              <tr>         
                  <td><label for="positif">Positif</label></td>
                  <td><input type="number" class="form-control" name="positif"/></td>
              </tr>
          
              <tr>         
                  <td><label for="meninggal">Meninggal</label></td>
                  <td><input type="number" class="form-control" name="meninggal"/></td>
              </tr>

              <tr>         
                  <td><label for="sembuh">Sembuh</label></td>
                  <td><input type="number" class="form-control" name="sembuh"/></td>
              </tr>
              <br />

              <tr><td colspan="2"><center><button type="submit" class="btn btn-primary">Add Data</button></center></td></tr>
      </form>
   

  </table>
</center>
</body>
@endsection
