<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public $timestamps = false;

    public function category(){
        return $this->belongsToMany(category::class,'article_category');
    }

    public function content_details(){
        return $this->belongsToMany(content_details::class,'article_content');
    }
}
