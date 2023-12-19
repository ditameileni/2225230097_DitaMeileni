@extends('concert.template')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('concert/' .$concert->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$concert->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$concert->nama}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$concert->email}}" class="form-control"></br>
        <label>No Telepon</label></br>
        <input type="text" name="noTelepon" id="noTelepon" value="{{$concert->noTelepon}}" class="form-control"></br>
        <label>Jumlah Tiket</label></br>
        <input type="text" name="jumlahTiket" id="jumlahTiket" value="{{$concert->jumlahTiket}}" class="form-control"></br>
        <label>Cat Tempat Duduk</label></br>
        <input type="text" name="catTempatDuduk" id="catTempatDuduk" value="{{$concert->catTempatDuduk}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop