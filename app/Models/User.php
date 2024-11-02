<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define the table associated with the model
    protected $table = 'users';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Optionally, you can define hidden attributes (like the password)
    protected $hidden = [
        'password'
    ];

    // Optionally, you can define casts for specific attributes

    // You can define additional methods for your model if needed
}
