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
            <h1>Laporan</h1>
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
                <h2 style="background-color: lightblue; color: white; padding-left: 10px; ">Jumlah Siswa : {{ $count }}</h2>
                <br>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                       <th>Nis</th>
                       <th>Nama</th>
                       <th>Jurusan</th>
                       <th>Aksi</th>
                      

                      </tr>
                    </thead>
                   <tbody>
                      @foreach($siswa as $s)
                      <tr>
                        <td>{{$s->nis}}</a></td>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->jurusan}}</td>
                        <td><a href="/admin/{{$s->id}}/cetak" class="btn btn-info btn-sm">Cetak</a></td>
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