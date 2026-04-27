<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
       protected $table = 'table_dosen';

       protected $fillable = [
        'Fullname',
        'NIM',
        'NIDN',
        'Pendidikan_Terakhir',
        'Jurusan',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Alamat'
    ];
}
