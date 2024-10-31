<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandarListrik extends Model
{
    use HasFactory;

    protected $table = 'standar_listrik';
    protected $primaryKey = 'id_standar_listrik';
    protected $fillable = ['tipe_rumah', 'daya_maksimum'];
}
