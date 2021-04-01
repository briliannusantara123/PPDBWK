<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Siswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
  	.panel h3{
  		text-align: center;
  	}
  </style>
</head>
<body>
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
<div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Update Data Siswa</h3>
                </div>
                <div class="panel-body">
                  <form action="/admin/{{$siswa->id}}/update" method="POST">
              {{csrf_field()}}
   <div class="form-group">
    <label for="exampleInputEmail1">NIS</label>
    <input name="nis"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->nis}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name="nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->nama}}">
  </div>
  <div class="form-group">
          <label>Jenis Kelamin</label>
          <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">
            <label>Laki-laki</label>
          </div>
          <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan">
            <label>Perempuan</label>
          </div>

        </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Lahir</label>
    <input name="tempat_lahir"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->tempat_lahir}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input name="tanggal_lahir"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->tanggal_lahir}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input name="alamat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->alamat}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Asal Sekolah</label>
    <input name="asal"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->asal}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input name="kelas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->kelas}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jurusan</label>
    <input name="jurusan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$siswa->jurusan}}">
  </div>
  
  
  <div class="modal-footer">
  
  <button type="submit" class="btn btn-warning">Update</button>
  <a class="btn btn-danger" href="/admin" > Kembali</a>

</div>
</form>
              </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
