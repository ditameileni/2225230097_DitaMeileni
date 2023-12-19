@extends('concert.template')
@section('content')
 
 
<div class="card">
  <div class="card-header">concert Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $concert->nama }}</h5>
        <p class="card-text">Email : {{ $concert->email }}</p>
        <p class="card-text">No Telepon : {{ $concert->noTelepon }}</p>
        <p class="card-text">Jumlah Tiket : {{ $concert->jumlahTiket }}</p>
        <p class="card-text">Cat Tempat Duduk : {{ $concert->catTempatDuduk }}</p>
  </div>
       
    </hr>
  
</div>
</div>