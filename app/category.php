<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

class category extends Model
{
    use HasJsonRelationships;

    public $timestamps = false;

    protected $table='articles';

    public function article(){
        return $this->belongsToMany(article::class,'article_categories','category_id');
    }
    //'article_categories','category_id'
}
