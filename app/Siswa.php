<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     protected $table ='siswa';
    protected $fillable =['nis','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','asal','kelas','jurusan'];
}
