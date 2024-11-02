<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    
    // Tambahkan 'durasi_bijak' dan 'daya_bijak' ke dalam fillable
    protected $fillable = ['nama_kategori', 'durasi_bijak', 'daya_bijak'];

    public function perangkatListrik()
    {
        return $this->hasMany(PerangkatListrik::class, 'kategori_id', 'id_kategori');
    }
}
