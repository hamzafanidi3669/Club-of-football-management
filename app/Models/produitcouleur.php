<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produitcouleur extends Model
{
    use HasFactory;
    protected $table = 'produit_couleurs';
    protected $fillable = ['produit_id','couleur'];


    public function produit(){
        return $this->belongsTo(produit::class,'produit_id');
    }
    // public function produitcouleurtaille(){
    //     return $this->hasMany(produitcouleurtaille::class);
    // }
    public function panier(){
        return $this->hasMany(panier::class);
    }
    // public function image()
    // {
    //     return $this->hasManyThrough(produitimage::class, produitcouleurtaille::class);
    // }
}
