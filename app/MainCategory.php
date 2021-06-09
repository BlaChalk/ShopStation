<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $fillable = [
        'main_name',
    ];

    public function categories()
    {
        return $this->hasMany('App/Category');
    }
}
