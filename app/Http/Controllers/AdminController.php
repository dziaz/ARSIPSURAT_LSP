<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //buat_user
    public function createUser(){
        return view('admin.createUser');
    }

    public function store(Request $request){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
        ];

        $attributes = request()->validate([
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ], $message);
        
        $attributes['password'] = bcrypt($attributes['password'] );

        $data = new m_user;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save($attributes);
        return redirect('/data-admin')->with('success', 'Data berhasil disimpan');;
    }
        
    //tampil data m_user
    public function index(){
        $data = m_user::paginate(2);
    return view('admin.admin', ['data' => $data]);
    }

    public function destroy($id){
        $data = m_user::find($id);
        $data->delete();
        return redirect('/data-admin')->with('success', 'Data berhasil dihapus');;
    }


    public function edit($id){
        $data = m_user::find($id);
        return view('admin.updateForm', compact('data'));
    }

    public function update(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
           

        ], $message);

        $data = m_user::find($id);
        $data->username = $request->username;
        $data->password = $request->password;

        $data->update();
        return redirect('/data-admin')->with('success', 'Data berhasil diubah');;
    }

    
}
