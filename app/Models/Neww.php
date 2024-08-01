<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Sluggable\HasSlug;
// use Spatie\Sluggable\SlugOptions;
use Carbon\Carbon;

class neww extends Model
{
    use HasFactory;
    // use HasSlug;

    protected $table = 'newws';
    protected $fillable = ['image','titre','content'];


    // public function getSlugOptions() : SlugOptions
    // {
    //     return SlugOptions::create()
    //         ->generateSlugsFrom('titre')
    //         ->saveSlugsTo('slug');
    // }
        // public function getRouteKeyName(){
        //     return 'slug';
        // }
        public function publishedAt(){
            return Carbon::parse($this->created_at);
        }
        
}
