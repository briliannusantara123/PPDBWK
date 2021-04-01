<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PPDB-SMK WIKRAMA</title>
    <style type="text/css">
      .container{
        text-align: center;
      }
      .data {
        margin-left: 150px;
        margin-top: 80px;
       
      }
      .bril {
        margin-left: 550px;
        margin-top: 150px;
        margin-bottom: 100px;
      }
    </style>
  </head>
  <body style="background-image: url();">
    <br>
    <br>
  	<div class="container">
  		 <img class="mb-4" src="http://4.bp.blogspot.com/-FQ5u-thKT-w/Umh6HU1xQnI/AAAAAAAAAMc/w0MTATc8q_A/s1600/Wikrama+PNG.png" alt="" width="100" height="100">
  		<h3>FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN 2020-2021</h3>

        <div class="form-group">
          <h5>Nomor Pendaftaran : {{$siswa->id}}</h5>
        </div>
  		
  			<div class="form-group">
  				<h5>_______________________________________________________________________________________________</h5>
  			</div>
       </div>
          
          <div class="data">
            <div class="form-group-inline">
          <h5>NIS  : {{ $siswa->nis }}</h5>
          <div class="form-group-inline">
          <h5>Nama Siswa : {{ $siswa->nama }}</h5>
          <div class="form-group-inline">
          <h5>Jenis Kelamin  : {{ $siswa->jenis_kelamin }}</h5>
          <div class="form-group-inline">
          <h5>Tempat Lahir  : {{ $siswa->tempat_lahir }}</h5>
          <div class="form-group-inline">
          <h5>Tanggal Lahir : {{ $siswa->tanggal_lahir }}</h5>
          <div class="form-group-inline">
          <h5>Alamat  : {{ $siswa->alamat }}</h5>
          <div class="form-group-inline">
          <h5>Asal Sekolah  : {{ $siswa->asal }}</h5>
          <div class="form-group-inline">
          <h5>Kelas  : {{ $siswa->kelas }}</h5>
          <div class="form-group-inline">
          <h5>Jurusan  : {{ $siswa->jurusan }}</h5>
          </div>
     
          <div class="bril">

          <h5>Bogor, {{ date('d F Y',strtotime($siswa->created_at)) }}</h5>
          <br>
          <br>
  			   <h5>Brilian Satria Nusantara</h5>
           </div>
  		</form>
  	</div>

    <script type="text/javascript">
      window.print();
    </script>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>