<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class commande extends Model
{
    use HasFactory;
    protected $fillable = ['date_commande','type_commande','id_user'];
    protected $table='commandes';

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function detailscommande(){
        return $this->hasMany(details_commande::class);
    }

    public function publishedAt(){
        return Carbon::parse($this->created_at);
    }
  
    
}
