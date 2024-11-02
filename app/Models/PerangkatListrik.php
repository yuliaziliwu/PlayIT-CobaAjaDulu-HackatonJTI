<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatListrik extends Model
{
    use HasFactory;
    
    protected $table = 'perangkat_listrik';
    protected $primaryKey = 'id_perangkat';
    
    protected $fillable = [
        'kategori_id',
        'nama_perangkat',
        'daya',
    ];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}