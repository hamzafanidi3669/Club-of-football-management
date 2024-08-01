<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = ['code_ticket','prix_ticket','date_achat_ticket','user_id','matche_id'];
    protected $table='tickets';
    use HasFactory;


    public function matche(){
        return $this->belongsTo(matche::class,'matche_id');
    }
    public function user(){
        return $this->belongsTo(user::class,'user_id');
    }
    public function details_commande(){
        return $this->hasMany(details_commande::class);
    }
}
