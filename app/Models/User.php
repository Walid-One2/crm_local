<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'fonction_id',
        'responsable_id',
        'statut',
        'email',
        'tel',
        'password',
        'roles',
        'name',
        'email_verified_at',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fonction()
    {
        return $this->belongsTo(Fonction::class);
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function sourcings()
    {
        return $this->hasMany(Sourcing::class);
    }

    public function comptes()
    {
        return $this->hasMany(Compte::class);
    }
}