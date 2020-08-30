<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyRecord extends Model
{
    protected $fillable = [
        'quantity',
    ];

    public function users()
    {
        return $this->belongsTo('App/User');
    }

    public function commodities()
    {
        return $this->belongsTo('App/Commodity');
    }
}
