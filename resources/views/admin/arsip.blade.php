@extends('layouts.admin.template')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-4 text-gray-800">Arsip Surat</h1>
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
            <form action="{{ route('arsip.cari') }}" method="GET">
    <span>Cari surat 
        <label>
            <input type="search" name="q" class="form-control form-control-sm" placeholder="Nomor Surat atau Judul" aria-controls="dataTable">
        </label>
        <button type="submit" class="btn btn-primary btn-sm">Cari</button>
    </span>
</form>

    </div>
                <thead>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>judul</th>
                        <th>Waktu Pengarsipan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $dataArsip)
                    <tr>
                        <td>{{ $dataArsip->no_surat }}</td>
                        <td>{{ $dataArsip->kategori }}</td>
                        <td>{{ $dataArsip->judul }}</td>
                        <td>{{ $dataArsip->created_at }}</td>
                        <td>

                        <form action="{{route('arsip.hapus', $dataArsip->id)}}" method="post">@csrf
                    <button class="btn btn-danger px-3" onClick="return confirm('Yakin Hapus Data?')">Hapus</button>
                    <a href="{{ asset($dataArsip->file_surat) }}" class="btn btn-primary px-4 text mb-1" download>Unduh</a>
                    <!-- <a href="{{ asset($dataArsip->file_surat) }}" class="btn btn-info" target="_blank">Lihat</a> -->
                    <a href="{{ route('arsip.lihat-surat', $dataArsip->id) }}" class="btn btn-info" target="_blank">Lihat</a>
                    </form>
                  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('unggah')}}" class="btn btn-dark  px-4 text mb-2">Arsipkan Surat....</a>
           
            <div style="col-12 col-md-6">
            {{ $data->links() }}
       
            </div>
        </div>
       
    </div>
</div>

</div>



@endsection