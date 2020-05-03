<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $guarded = ['id'];

    public function type_info()
    {
        return $this->belongsTo('App\Type_info');
    }
}
