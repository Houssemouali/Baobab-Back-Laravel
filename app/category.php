<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function article(){
        return $this->belongsToMany(article::class,'article_category');
    }
}
