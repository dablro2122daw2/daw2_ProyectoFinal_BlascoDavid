<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Jugador extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;

    protected $fillable = [
        'Username',
        'Password',
        'Rango'
    ];

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->Password;
    }
}
