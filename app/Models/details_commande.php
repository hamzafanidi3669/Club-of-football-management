<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details_commande extends Model
{
    use HasFactory;
    protected $fillable = ['commande_id','quantite_commande','produit_id','ticket_id'];
    protected $table='details_commande';

    public function commande(){
        return $this->belongsTo(commande::class);
    }
    public function produit(){
        return $this->belongsTo(produit::class,'produit_id');
    }
    public function ticket(){
        return $this->belongsTo(ticket::class,'ticket_id');
    }

    
}
