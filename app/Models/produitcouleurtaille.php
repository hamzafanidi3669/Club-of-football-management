<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produitcouleurtaille extends Model
{
    use HasFactory;
    protected $fillable = ['produit_couleur_id','produit_taille_id','quantite_produit','produit_image_id'];
    protected $table = 'produit_couleur_taille';


    public function produitcouleur(){
        return $this->belongsTo(produitcouleur::class,'produit_couleur_id');

    }
    public function produittaille(){
        return $this->belongsTo(produittaille::class,'produit_taille_id');

    }
    public function produitimage(){
        return $this->belongsTo(produitimage::class,'produit_image_id');

    }

}
