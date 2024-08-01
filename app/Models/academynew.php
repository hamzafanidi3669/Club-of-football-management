<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class academynew extends Model
{
    protected $table = 'academynews';
    protected $fillable = ['image,titre,content,published_at'];
    use HasFactory;
    public function publishedAt(){
        return Carbon::parse($this->published_at);
    }
}
