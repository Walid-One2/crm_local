<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    protected $fillable = [
        'site',
    ];

    public function comptes()
    {
        return $this->hasMany(Compte::class);
    }
}
