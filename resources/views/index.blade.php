@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .table1{
    width: 100%;
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0, 0.6);
    color: white; 
  }
  .kolom{
    font-weight: bold;
  }
  .info{
    border:solid 2px #aaa;
    background-color:rgba(0,0,0, 0.4); 
    padding:15px;
    border-radius:15px;
    margin:0;
    text-align:justify;
    line-height:20px;
    color: white;
    font-size:18px;
  }
</style>
<div class="body">
            

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  
    <a href="{{ url('covids/create') }}"><div class="btn btn-info">Tambah Data</div></a>
    <a href="{{ url('hospitals/') }}"><div class="btn btn-info"><div class="rs">Info Rumah Sakit</div></div></a><br/><br/>  
  <table class="table table-bordered text-center table1" border="1" cellpadding="8" cellspacing="0">
    <thead class="btn-warning">
        <tr class="kolom">
          <td>Wilayah</td>
          <td>Positif</td>
          <td>Meninggal</td>
          <td>Sembuh</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($covidcases as $case)
        <tr>
            <td>{{$case->wilayah}}</td>
            <td>{{$case->positif}}</td>
            <td>{{$case->meninggal}}</td>
            <td>{{$case->sembuh}}</td>
            <td><a href="{{ route('covids.edit', $case->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('covids.destroy', $case->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table><br><br><br><br><br><br><br><br><br><br><br>
<div>
</div>
@endsection