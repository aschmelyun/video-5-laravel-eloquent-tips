<?php

namespace App\Http\Controllers;

use App\Property;
use App\Technician;
use App\Tenant;
use Illuminate\Http\Request;

class TipController extends Controller
{

    public function one(Request $request)
    {
        $properties = Property::query();

        if ($request->get('rent')) {
            $properties->where('rent', '<=', $request->get('rent'));
        }

        if ($request->get('pets')) {
            $properties->where('allows_pets', true);
        }

        return $properties->get();
    }

    public function two(Request $request)
    {
        return Property::with(['newestTenant', 'tenants'])
            ->get();
    }

    public function three(Request $request)
    {
        return Property::whereHas('tenants', function($query) {
            $query->where('has_cats', false)
                ->where('has_dogs', false);
        })
            ->with(['tenants' => function($query) {
                $query->where('has_cats', false)
                    ->where('has_dogs', false);
            }])
            ->get();
    }

    public function four(Request $request)
    {
        return Technician::with('requests')
            ->get()
            ->sortBy('requests_count');
    }

    public function five(Request $request)
    {
        return Tenant::whereMonth('lease_expires_at', $request->get('month'))
            ->whereYear('lease_expires_at', $request->get('year'))
            ->get();
    }

}
