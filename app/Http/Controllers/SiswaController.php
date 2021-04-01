<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
	  public function index()
    {
        $data_siswa=\App\Siswa::all();
        
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {

         $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);
        $siswa =\App\Siswa::create($request->all());
        
        return redirect('/')->with('sukses','data berhasil disimpan');
    }
    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
       
        return view('siswa/edit',['siswa' =>$siswa]);
    }
    public function update(Request $request,$id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa');
    }
    
}
