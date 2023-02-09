<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asdos extends Model
{
    use HasFactory;
    protected $table ='asisten_dosen';

    protected $primaryKey = 'id_asdos';
    
    protected $fillable = [
        'id_praktikum',
        'nim',
        'nama',
        'email',
        'ipk',
        'transkrip_nilai',
        'no_hp',
        'status',
    ];
}
