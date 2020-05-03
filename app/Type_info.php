<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_info extends Model
{
    protected $guarded = ['id'];

    public function info(){
        return $this->hasMany('App\Info');
    }
}
