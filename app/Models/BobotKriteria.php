<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BobotKriteria extends Model
{
    use HasFactory;
    
    protected $table = 'bobot_kriteria';
    protected $primaryKey = 'id_kriteria';
    
    protected $fillable = [
        'kriteria',
        'bobot',
    ];
    public $timestamps = false; 
}
