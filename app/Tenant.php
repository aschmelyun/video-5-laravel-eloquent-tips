<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

}
