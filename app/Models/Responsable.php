<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $fillable = ['responsable_nom', 'email'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}