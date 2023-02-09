<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    use HasFactory;
    protected $table ='praktikum';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nid',
        'kode_ruangan',
        'nama_praktikum',
        'sks',
    ];
}
