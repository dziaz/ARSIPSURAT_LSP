@extends('layouts.admin.template')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mt-4 pl-5 ml-5 text-gray-800"><b>Kategori Surat</b></h1>
<div class=" pl-5 ml-5 text-gray-800">
<p>Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat. <br>
Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.
</p>
</div>


<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Membership</h6> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <div class="row">
            <form action="{{ route('kategori.cari') }}" method="GET">
    <span>Cari kategori
        <label>
            <input type="search" name="q" class="form-control form-control-sm" placeholder="cari kategori" aria-controls="dataTable">
        </label>
        <button type="submit" class="btn btn-primary btn-sm">Cari</button>
    </span>
</form>
    </div>
                <thead>
                    <tr>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $dataKategori)
                    <tr>
                        <td>{{ $dataKategori->id_kategori }}</td>
                        <td>{{ $dataKategori->nama_kategori }}</td>
                        <td>{{ $dataKategori->keterangan }}</td>
                        <td>

                        <form action="{{route('kategori.hapus', $dataKategori->id_kategori)}}" method="post">@csrf
                    <button class="btn btn-danger px-3" onClick="return confirm('Yakin Hapus Data?')">Hapus</button>
                    <a href="{{route('kategori.edit', $dataKategori->id_kategori)}}" class="btn btn-info  px-4 text mb-1">Edit</a>
                    </form>
                  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('tambah')}}" class="btn btn-success  px-4 text mb-2"><span>(+) </span> Tambah Kategori Baru....</a>
           
            <div style="col-12 col-md-6">
            {{ $data->links() }}
       
            </div>
        </div>
       
    </div>
</div>

</div>



@endsection