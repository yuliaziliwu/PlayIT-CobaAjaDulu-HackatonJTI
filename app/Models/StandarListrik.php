<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandarListrik extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'standar_listrik';

    // Tentukan primary key jika berbeda dari 'id'
    protected $primaryKey = 'id_standar_listrik';

    // Jika Anda tidak ingin timestamp otomatis
    public $timestamps = false; 

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'daya_maksimum',
        'tarif_per_kwh',
    ];
}
