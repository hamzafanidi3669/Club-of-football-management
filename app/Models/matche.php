<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matche extends Model
{
    protected $fillable = ['nom_equipe_domicile','nom_equipe_exterieur','date_matche','heure_matche','lieu','resultat_equipe_exterieur','resultat_equipe_domicile','image_equipe_domicile','image_equipe_exterieur','nom_championnat','image_championnat','ville','prix_ticket','published_At'];
    protected $table='matches';
    use HasFactory;

    public function ticket(){
        return $this->hasMany(ticket::class);
    }
    public function publishedAt(){
        return Carbon::parse($this->published_At);
    }
}
