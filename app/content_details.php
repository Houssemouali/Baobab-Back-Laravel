<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content_details extends Model
{
    public function article(){
        return $this->belongsToMany(article::class,'articles');
    }
}
