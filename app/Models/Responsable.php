<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'responsables';

    protected $fillable = [
        'responsable_nom',
    ];

    /**
     * Les utilisateurs rattachés à ce responsable.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'responsable_id');
    }
}
