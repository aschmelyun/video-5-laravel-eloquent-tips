<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $guarded = [];

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }

    public function newestTenant()
    {
        return $this->hasOne(Tenant::class)
            ->orderBy('lease_expires_at', 'desc');
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

}
