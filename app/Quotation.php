<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{

    protected $fillable = [
        'clientId',
        'mode',
        'container',
        'length',
        'width',
        'height',
        'weight',
        'quantity',
        'commodity',
        'message'
    ];

    public function sender(){
        return $this->belongsTo('App\Client');
    }
}
