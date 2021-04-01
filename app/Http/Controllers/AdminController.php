<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $siswa=\App\Siswa::all();
       
        return view('admin.index',['siswa' => $siswa]);
    }
    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/admin')->with('sukses','data berhasil disimpan');
    }
    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
       
        return view('admin.edit',['siswa' =>$siswa]);
    }
    public function update(Request $request,$id)
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
        
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/admin');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/admin');
    }
   public function show($id)
       {
        $siswa = \App\Siswa::find($id);
        return view('admin.show',['siswa' => $siswa]);
       }

     public function laporan()
    {
        $siswa=DB::table('siswa')->get();
        $count = DB::table('siswa')->count();
       
        return view('admin.laporan',compact('count','siswa'));
    }
     public function cetak($id)
    {
        $siswa = \App\Siswa::find($id);
        $data_cetak=\App\Siswa::all();
        return view('admin.cetak',['siswa' => $siswa,'data_cetak' => $data_cetak]);
    }
   
}
