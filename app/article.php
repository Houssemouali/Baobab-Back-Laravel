<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

class article extends Model
{
    use HasJsonRelationships;

    public $timestamps = false;
    protected $casts = [
        'options' => 'json',
    ];
    protected $table='categories';

    public function category(){
        return $this->belongsToMany(category::class,'article_categories','article_id','category_id');
    }
//' options->categories[]->category_id'
    //        return $this->belongsToJSON(category::class,'article_categories','article_id','category_id');

    public function content_details(){
        return $this->belongsToMany(content_details::class,'article_content');
    }
}
