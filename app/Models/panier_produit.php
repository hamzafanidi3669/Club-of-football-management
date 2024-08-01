<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier_produit extends Model
{
    use HasFactory;
    protected $table = 'panier_produit';
    protected $fillable = [
        'panier_id',
        'produit_id',
        'quantite',
        'prixtotal',
        'produit_couleur_nom',
        'produit_taille_id',
        'produit_image_id',
    ];

    public function panier()
    {
        return $this->belongsTo(Panier::class, 'panier_id');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    public function produitImage()
    {
        return $this->belongsTo(ProduitImage::class, 'produit_image_id');
    }

    public function produitTaille()
    {
        return $this->belongsTo(ProduitTaille::class, 'produit_taille_id');
    }
}
