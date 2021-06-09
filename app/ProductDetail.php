<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'name', 'serialName', 'category_id', 'content', 'price', 'bigPicture', 'productDetail','productDetailPicture', 'specification','specificationPicture',
    ];

    public function category()
    {
        return $this->belongsTo('App/Category');
    }
}
