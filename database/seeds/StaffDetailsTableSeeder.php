<?php

use Illuminate\Database\Seeder;

class StaffDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\StaffDetails::class,10)->create();
    }
}
