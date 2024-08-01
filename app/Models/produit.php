<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $fillable = ['designation_produit','image','prix_produit','date_achat_produit','categorie_id'];
    protected $table='produits';

    public function categorie(){
        return $this->belongsTo(categorie::class);
    }
    public function details_commande()
    {
        return $this->hasMany(details_commande::class);
    }
    // public function panier()
    // {
    // return $this->belongsTo(Panier::class);
    // }

    // public function produitcouleurtaille(){
    //     return $this->hasMany(produitcouleurtaille::class);
    // }
    public function produitcouleur(){
        return $this->hasMany(produitcouleur::class);
    }
    public function produittaille(){
        return $this->hasMany(produittaille::class);
    }
    public function produitimage(){
        return $this->hasMany(produitimage::class);
    }
    public function paniers()
    {
        return $this->belongsToMany(Panier::class)->withTimestamps();
    }
    public function panier_produit(){
        return $this->hasMany(panier_produit::class);
    }


    // public function panier(){
    //     return $this->hasMany(panier::class);
    // }


}
