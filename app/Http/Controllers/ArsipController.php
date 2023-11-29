<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    //
    public function indexArsip(){
        $data = Arsip::paginate(10);
    return view('admin.arsip', ['data' => $data]);
    }
    public function indexKategori(){
        $data = Kategori::paginate(10);
    return view('admin.kategori-surat', ['data' => $data]);
    }

    public function arsipSurat(){
        $data = Kategori::all();
        return view('admin.arsip-surat',['data'=>$data]);
    }

    public function buatKategori(){
        return view('admin.tambah-kategori');
    }
    public function about(){
        return view('admin.about');
    }

    public function unggahSurat(Request $request){
       
        //validasi form
        
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];
        
        $this->validate($request, [
            'kategori' => 'required',
            'no_surat' => 'required',
            'judul' => 'required',
            'file_surat' => 'mimes:pdf|max:2048',
           
        ], $message);

        $data = new Arsip;
        $data->no_surat = $request->no_surat;
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
      
        if ($request->hasFile('file_surat')) {
            $suratFile = $request->file('file_surat');
            $suratFileName =  $suratFile->getClientOriginalName();
            $suratFile->storeAs('public/surat', $suratFileName); // Simpan file tugas di direktori 'storage/app/public/tasks'
            $data->file_surat = 'storage/surat/' . $suratFileName; // Simpan nama file tugas dalam basis data
        }
        // print_r($data);
        // exit;
        $data->save();
        return redirect('data-arsip')->with('success', 'Data berhasil disimpan');;
    }

    public function tambahKategori(Request $request){
       
        //validasi form
        
        $message= [
            'required' =>':attribute tidak boleh kosong',
        ];
        
        $this->validate($request, [
            'nama_kategori' => 'required',
            'keterangan' => 'required',
        ], $message);

        $data = new Kategori;
        $data->nama_kategori = $request->nama_kategori;
        $data->keterangan = $request->keterangan;
        // print_r($data);
        // exit;
        $data->save();
        return redirect('data-kategori')->with('success', 'Data berhasil disimpan');;
    }

    public function hapusArsip($id){
        $data = Arsip::find($id);
        $data->delete();
        return redirect('data-arsip')->with('success', 'Task berhasil dihapus');;
    }

    public function hapusKategori($id){
        $data = Kategori::find($id);
        $data->delete();
        return redirect('data-kategori')->with('success', 'Task berhasil dihapus');;
    }

    public function editKategori($id){
        $data = Kategori::find($id);
        return view('admin.edit-kategori', compact('data'));
    }

    public function updateKategori(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'nama_kategori' => 'required',
            'keterangan' => 'required',
        ], $message);

        $data = Kategori::find($id);
        $data->nama_kategori = $request->nama_kategori;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect('data-kategori')->with('success', 'Pengguna berhasil diubah');;
    }

    public function cariArsip(Request $request)
    {
        $kataKunci = $request->input('q');
        $hasilPencarian = Arsip::when($kataKunci, function ($query) use ($kataKunci) {
            $query->where('no_surat', 'LIKE', "%$kataKunci%")
                ->orWhere('judul', 'LIKE', "%$kataKunci%");
        })->paginate(10);

        return view('admin.arsip', ['data' => $hasilPencarian, 'kataKunci' => $kataKunci]);
    }

    public function cariKategori(Request $request)
    {
        $kataKunci = $request->input('q');
        $hasilPencarian = Kategori::when($kataKunci, function ($query) use ($kataKunci) {
            $query->where('nama_kategori', 'LIKE', "%$kataKunci%");
        })->paginate(10);

        return view('admin.kategori-surat', ['data' => $hasilPencarian, 'kataKunci' => $kataKunci]);
    }

    public function lihatSurat($id)
    {
        $surat = Arsip::findOrFail($id);

        return view('admin.lihat-surat', compact('surat'));
    }
}
