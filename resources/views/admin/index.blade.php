@extends('layouts.master')
@section('content')
<br>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                <section class="section">
          <div class="section-header">
            <h1>Data Siswa</h1>
          </div>

       </section>
                  <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          
                          @if($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      </div>
                    </div>
                    <br>
                   
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                       <th>Nis</th>
                       <th>Nama</th>
                       <th>Jenis Kelamin</th>
                       <th>Tempat Lahir</th>
                       <th>Tanggal Lahir</th>
                       <th>Alamat</th>
                       <th>Asal Sekolah</th>
                       <th>Kelas</th>
                       <th>Jurusan</th>
                       <th>Aksi</th>

                      </tr>
                    </thead>
                   <tbody>
                      @foreach($siswa as $s)
                      <tr>
                        <td>{{$s->nis}}</a></td>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->jenis_kelamin}}</td>
                        <td>{{$s->tempat_lahir}}</td>
                        <td>{{$s->tanggal_lahir}}</td>
                        <td>{{$s->alamat}}</td>
                        <td>{{$s->asal}}</td>
                        <td>{{$s->kelas}}</td>
                        <td>{{$s->jurusan}}</td>

                        <td><a href="/admin/{{$s->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                         <a href="/admin/{{$s->id}}/show" class="btn btn-info btn-sm">Show</a>
                          <a href="/admin/{{$s->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('yakin akan menghapus data?')">Hapus</a>
                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
                        
@stop