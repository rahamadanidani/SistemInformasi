<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsdosPendaftaran extends Model
{
    use HasFactory;

    protected $table ='dosen';

    protected $primaryKey = 'nid';
    
    protected $fillable = [
        'nama_dosen',
        'jenis_kelamin',
        'alamat',
        'email',
        'no_hp',
    ];
}
