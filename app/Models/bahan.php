<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{
    use HasFactory;
    protected $table = 'table_pengajuanbahan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_bhp', 'nama_pengampu', 'jenis_praktek', 'volume', 'jumlah'];
}
