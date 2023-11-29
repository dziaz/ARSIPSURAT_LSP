@extends('layouts.admin.template')

@section('content')

<div class="container">
    <div class="mt-4">
    <h3 class="text-dark"><b>Arsip Surat >> <span>{{ Route::currentRouteName() }}</span></b></h3>
    </div>
    <p class="text-dark">Unggah surat yang telah  terbit pada form ini untuk diarsipkan. <br>
        Catatan : <br>
        <span class="ml-4">- Gunakan file berformat PDF</span>
</p>
<form class="inputan"method="POST" action="{{route('unggah.surat')}}" enctype="multipart/form-data">
              @csrf
            <div class="mb-2">
                <div class="row">
                    <div class="col-2">
                    Nomor Surat
                    </div>
                    <div class="col-4">
                    <input type="text" class="form-control" id="no_surat" name="no_surat" aria-describedby="emailHelp"
                        placeholder="Nomor Surat">
                        @error('no_surat')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                    </div>
                </div>   
                </div>
            
                <div class="form-floating mb-2">
                    <div class="row">
                        <div class="col-2">
                            Kategori
                        </div>
                        <div class="col-6">
                        <select class="form-select" id="kategori" name="kategori" aria-label="Floating label select example">
                        @foreach($data as $kategori)
                          <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
						  @endforeach
                    </select>
                   
                    @error('kategori')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-2">
                <div class="row">
                    <div class="col-2">
                    Judul
                    </div>
                    <div class="col-8">
                    <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp"
                        placeholder="Judul">
                        @error('judul')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                    </div>
                </div>   
                </div>

                <div class="mb-5">
                <div class="row">
                    <div class="col-2">
                    File Surat (PDF)
                    </div>
                    <div class="col-6">
                    <input type="file" class="form-control" id="file_surat" name="file_surat" aria-describedby="emailHelp"
                        placeholder="Nama File" readonly>
                        @error('file_surat')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                    </div>
                    <div class="col-4 mt-1">
                      
                    </div>
                </div>   
                </div>
                <div class="row">
                    <div class="col-2">
                    <a href="{{route('data-arsip')}}" class="btn btn-danger text-end px-5">Kembali</a>
                    </div>
                    <div class="col-2">
                    <button class="btn btn-info px-5" type="submit">Simpan</button>
                    </div>
                </div>
                
                
            </form>
</div>



@endsection