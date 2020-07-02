<?php

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Property::class, 100)->create()
            ->each(function($property) {
                $property->tenants()
                    ->saveMany(factory(App\Tenant::class, rand(1, 3))->make());
                $property->requests()
                    ->saveMany(factory(App\Request::class, rand(0, 1))->make());
            });
    }
}
