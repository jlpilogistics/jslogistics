<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function sender(){
        return $this->belongsTo('App\Sender');
    }
}
