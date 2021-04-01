<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PPDB-SMK WIKRAMA</title>
  </head>
  <body style="background-image: url();">
    <div class="container">
      <h2 class="alert alert-primary text-center mt-3">Formulir Pendaftaran Siswa Baru</h2>
      <h5>Data Calon Murid</h5>
      <form action="siswa/create" method="POST">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label>NIS</label>
          <input type="text" name="nis" class="form-control" placeholder="Masukan Nama Lengkap">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Panggilan">
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
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
          <label for="lahir">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" id="lahir">
        </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir">
        </div>
          </div>
        </div>
        
        <div class="form-group">
          <label>Alamat Rumah</label>
          <textarea class="form-control col-12"  rows="4" name="alamat"></textarea>
        </div>
    
        <div class="form-group">
          <label>Asal Sekolah</label>
          <input type="text" name="asal" class="form-control" placeholder="Masukan Asal Sekolah">
        </div>
        
        <div class="form-group">
          <label>Kelas</label>
          <input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas">
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="form-group">
    <label for="exampleFormControlSelect1">Merek</label>
    <select name="merek" class="form-control" id="exampleFormControlSelect1">
     
      <option value="RPL">RPL</option>
      <option value="Multimedia">Multimedia</option>
      <option value="OTKP">OTKP</option>
      <option value="TKJ">TKJ</option>

      
    </select>
  </div>
          </div>
          <br>  
          
         <button type="submit" class="btn btn-primary col-6">Submit</button>
         <button type="reset" class="btn btn-danger col-6">Reset</button>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>