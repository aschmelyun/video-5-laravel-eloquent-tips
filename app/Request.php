<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function technicians()
    {
        return $this->belongsToMany(Technician::class);
    }

}
