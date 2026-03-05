<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sourcing extends Model
{
    protected $fillable = [
        'user_id',
        'assigne_id',
        'compte_id',
        'date_debut_mission',
        'date_fin_mission',
        'action',
        'nombre_candidat',
        'criteres',
        'produitachete',
        'recrutement',
        'titre_poste',
        'date_creation',
        'date_modification',
        'remplacement',
        'noteremplacement',
        'notesuivi',
        'date_remplacement',
        'nom_candidat',
        'date_embauche',
        'date_signature',
        'type_contrat',
        'salaire',
        'monnaiesalaire_id',
        'type_salaire',
        'date_recrutement',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
