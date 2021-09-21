<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
