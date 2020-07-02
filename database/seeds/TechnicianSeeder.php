<?php

use Illuminate\Database\Seeder;

class TechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Technician::class, 10)->create();

        $requests = App\Request::get();
        foreach($requests as $request) {
            $request->technicians()->attach(rand(1, 5));
            $request->technicians()->attach(rand(6, 10));
        }
    }
}
