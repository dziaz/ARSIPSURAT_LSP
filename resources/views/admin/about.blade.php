@extends('layouts.admin.template')

@section('content')
<div class="container">
    <h3 class="pt-4 text-dark"><b>ABOUT</b></h3>
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-4 m-3">
      <img src="{{ asset('img/aku.png') }}" class="card-img"
                            style="object-fit: cover; height: 100%;">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Aplikasi ini dibuat oleh</h5>
        <p class="card-text">
    <span class="font-weight-bold">Nama   :</span>
    <span class="ml-2">Dziazahro Annisa Putri</span> <br>

    <span class="font-weight-bold">Prodi   :</span>
    <span class="ml-2">D3-MI PSDKU Kediri</span> <br>

    <span class="font-weight-bold">Nim     :</span>
    <span class="ml-2">2131730070</span> <br>

    <span class="font-weight-bold">TTL :</span>
    <span class="ml-2">15 Februari 2003</span> <br>

    <span class="font-weight-bold">Alamat :</span>
    <span class="ml-2"> Jombang</span>
  </p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection