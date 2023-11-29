@extends('layouts.admin.template')

@section('content')
<div class="container">
    <div class="mt-4">
    <h3 class="text-dark"><b>Kategori Surat >> <span>{{ Route::currentRouteName() }}</span></b></h3>
    </div>
<form class="inputan"method="POST" action="{{route('kategori.update-kategori', $data->id_kategori)}}" >
              @csrf
            <div class="mt-5 mb-2 pt-4">
                <div class="row">
                    <div class="col-2">
                   Nama Kategori
                    </div>
                    <div class="col-4">
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" aria-describedby="emailHelp"
                        placeholder="Nama Kategori" value="{{$data->nama_kategori}}">
                        @error('nama_kategori')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                    </div>
                </div>   
                </div>
            
                <div class="mb-2">
                <div class="row">
                    <div class="col-2">
                    Keterangan
                    </div>
                    <div class="col-8">
                    <textarea class="form-control" placeholder="Keterangan" id="keterangan" name="keterangan" value="{{$data->keterangan}}"></textarea>
                        @error('keterangan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                    </div>
                </div>   
              
                   
                </div>   
                <div class="row">
                    <div class="col-2">
                    <a href="{{route('data-kategori')}}" class="btn btn-danger text-end px-5">Kembali</a>
                    </div>
                    <div class="col-2">
                    <button class="btn btn-info px-5" type="submit">Simpan</button>
                    </div>
                </div>
                
                
            </form>
</div>
@endsection