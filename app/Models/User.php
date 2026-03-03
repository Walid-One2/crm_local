<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'tel',
        'statut',
        'roles',
        'fonction_id',
        'responsable_id',
        'remember_token',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = ['deleted_at'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'deleted_at'        => 'datetime',
        ];
    }

    /**
     * La fonction (rôle métier) de l'utilisateur.
     */
    public function fonction()
    {
        return $this->belongsTo(Fonction::class, 'fonction_id');
    }

    /**
     * Le responsable hiérarchique (auto-référence sur users).
     */
    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    /**
     * Les utilisateurs dont cet utilisateur est responsable.
     */
    public function subordonnes()
    {
        return $this->hasMany(User::class, 'responsable_id');
    }
}

