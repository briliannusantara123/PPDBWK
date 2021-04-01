<!DOCTYPE html>
<html>
<head>
    <title>Show Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style type="text/css">
            .row {
                text-align: center;
                margin-top: 10%;
            }
            .form-group{
                text-align: center;
            }
        </style>

 
</head>
<body>

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Data siswa</h2>
            </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/admin" style="margin-left: 450px;margin-bottom: 25px;"> Back</a>
            </div>
        </div>
    
   

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                {{ $siswa->nis }}
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $siswa->nama }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                {{ $siswa->jenis_kelamin }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Lahir:</strong>
                {{ $siswa->tempat_lahir }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                {{ $siswa->tanggal_lahir }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $siswa->alamat }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal Sekolah:</strong>
                {{ $siswa->asal }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $siswa->kelas }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan:</strong>
                {{ $siswa->jurusan }}
            </div>
        </div>
    </div>

</body>
</html>
   
