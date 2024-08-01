<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produittaille extends Model
{
    use HasFactory;
    protected $fillable = ['taille','produit_id'];
    protected $table='produit_taille';

    public function produit(){
        return $this->belongsTo(produit::class,'produit_id');
    }
 

    public function panier(){
        return $this->hasMany(panier::class);
    }
}
