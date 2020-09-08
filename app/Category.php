<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
    ];

    public function productDetails()
    {
        return $this->hasMany('App/ProductDetail');
    }

    public function main_category()
    {
        return $this->belongsTo('App/MainCategory');
    }
}
