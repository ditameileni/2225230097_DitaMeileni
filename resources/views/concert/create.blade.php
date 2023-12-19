@extends('concert.template')
@section('content')
 
<div class="card">
  <div class="card-header">Concert Page</div>
  <div class="card-body">
      
      <form action="{{ url('concert') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>No Telepon</label></br>
        <input type="text" name="noTelepon" id="noTelepon" class="form-control"></br>
        <label>Jumlah Tiket</label></br>
        <input type="text" name="jumlahTiket" id="jumlahTiket" class="form-control"></br>
        <label>Cat Tempat Duduk</label></br>
        <input type="text" name="catTempatDuduk" id="catTempatDuduk" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop