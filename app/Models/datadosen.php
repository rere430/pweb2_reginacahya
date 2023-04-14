<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadosen extends Model
{
    use HasFactory;
    protected $table = 'datadosens';
    protected $primaryKey = 'iddosen';
    protected $fillable = ['iddosen', 'nama', 'pengampu_praktek', 'pengampu_kelas', 'jumlahsks'];
}
