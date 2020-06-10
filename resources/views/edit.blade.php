@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
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
<body>
<center>
  <table border="3" cellpadding="10">
  <tr><td colspan="2"><center>Edit Data COVID-19</center></td></tr>

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

      <form method="post" action="{{ route('covids.update', $covidcase->id ) }}">
          
              @csrf
              @method('PATCH')
              <tr>
                  <td><label for="wilayah">Wilayah</label></td>
                  <td><input type="text" class="form-control" name="wilayah" value="{{ $covidcase->wilayah }}"/></td>
              </tr>

              <tr>         
                  <td><label for="positif">Positif</label></td>
                  <td><input type="number" class="form-control" name="positif" value="{{ $covidcase->positif }}"/></td>
              </tr>
          
              <tr>         
                  <td><label for="meninggal">Meninggal</label></td>
                  <td><input type="number" class="form-control" name="meninggal" value="{{ $covidcase->meninggal }}"/></td>
              </tr>

              <tr>         
                  <td><label for="sembuh">Sembuh</label></td>
                  <td><input type="number" class="form-control" name="sembuh" value="{{ $covidcase->sembuh }}"/></td>
              </tr>
              <br />

              <tr><td colspan="2"><center><button type="submit" class="btn btn-primary">Update Data</button></center></td></tr>
      </form>
   

  </table>
</center>
</body>
@endsection