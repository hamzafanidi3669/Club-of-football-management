<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produitimage extends Model
{

    use HasFactory;
    protected $fillable = ['url','description','produit_id'];
    protected $table = 'produit_images';

    public function produit(){
        return $this->belongsTo(produit::class,'produit_id');
    }
 
    public function panier(){
        return $this->hasMany(panier::class);
    }
    public function couleur()
    {
        return $this->belongsTo(Couleur::class);
    }
}
