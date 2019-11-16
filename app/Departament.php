<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $guarded = [];

    public function role()
    {
        return $this->belongsToMany('App\Role');
    }
}
