<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fonction extends Model
{
    use HasFactory;

    protected $table = 'fonctions';

    protected $fillable = [
        'intitule',
    ];

    /**
     * Les utilisateurs ayant cette fonction.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'fonction_id');
    }
}
