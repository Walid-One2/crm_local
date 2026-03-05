<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = [
        'id',
        'pays_id',
        'user_id',
        'nom',
        'description',
        'adresse',
        'complementadresse',
        'cp',
        'ville',
        'siteweb',
        'tel',
        'tel2',
        'fax',
        'statut',
        'date_creation',
        'niveau_satisfaction',
        'date_modification',
        'email',
        'statut_f',
        'user_id_F',
        'site_id',
        'numero_ice',
        'uid',
        'categorie',
        'date_note_devis',
    ];

    public function pays()
    {
        return $this->belongsTo(pays::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function site()
    {
        return $this->belongsTo(site::class);
    }
}
