<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
    ];
}
