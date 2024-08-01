<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    use HasFactory;
    protected $fillable = ['quantite','prixunitaire','prixtotal','produit_id','user_id','produit_taille_id','produit_image_id'];
    protected $table='paniers';


    // public function produit()
    // {
    //     return $this->belongsTo(Produit::class, 'produit_id');
    // }
    // public function produit()
    // {
    //     return $this->hasmany(Produit::class);
    // }
    public function produits()
{
    return $this->belongsToMany(Produit::class, 'panier_produit')->withTimestamps();
}
    
    // Relation avec le modèle ProduitCouleur
    public function produitCouleur()
    {
        return $this->belongsTo(produitcouleur::class, 'produit_couleur_id');
    }
    
    // Relation avec le modèle ProduitTaille
    public function produitTaille()
    {
        return $this->belongsTo(produittaille::class, 'produit_taille_id');
    }
    // Relation avec le modèle ProduitImage
    public function produitImage()
    {
        return $this->belongsTo(produitimage::class, 'produit_image_id');
    }
    public function userpanier()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    public function panier_produit(){
        return $this->hasMany(panier_produit::class);
    }
}
