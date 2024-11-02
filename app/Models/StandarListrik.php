<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandarListrik extends Model
{
    use HasFactory;

    protected $table = 'standar_listrik'; // Nama tabel di database
    protected $primaryKey = 'id_standar_listrik'; // Primary key tabel

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['daya_maksimum', 'tarif_per_kwh'];
}
