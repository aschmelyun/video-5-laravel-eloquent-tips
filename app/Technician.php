<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{

    protected $guarded = [];
    protected $appends = ['requests_count'];

    public function requests()
    {
        return $this->belongsToMany(Request::class);
    }

    public function getRequestsCountAttribute()
    {
        return $this->requests()->count();
    }

}
