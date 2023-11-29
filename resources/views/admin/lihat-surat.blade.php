@extends('layouts.admin.template')

@section('content')

<div class="container">
        <div class="content">
            <div class="">
                
                            <h3 class="pt-4 fw-bold">Arsip Surat >> Lihat </h1>
                            <br>
                            <h5 class="card-title"></h5>
                            <p>Nomor : {{ $surat->no_surat }}</p>
                            <p>Kategori : {{ $surat->kategori }}</p>
                            <p>Judul : {{ $surat->judul }}</p>
                            <p>Waktu Unggah : {{ $surat->created_at }}</p>  
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detail Isi Surat</h4>
                            </div>
                            <div class="card-body">
                            <iframe src="{{ asset($surat->file_surat) }}" width="100%" style="height:500px"></iframe>

                            </div>
                            <br>
                            <br>
                            <div class="text-left">
                                <a href="{{ route('data-arsip') }}"><button type="button" class="btn btn-primary"><< Kembali</button></a>
                                <a href="{{ asset($surat->file_surat) }}" download><button class="btn btn-danger">Unduh</button></a>
                                <a href=""><button type="button" class="btn btn-warning">Edit / Ganti
                                        File</button></a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection