<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'name', 'serialName', 'content', 'price', 'bigPicture', 'productDetail', 'specification',
    ];

    public function category()
    {
        return $this->belongsTo('App/Category');
    }
}
