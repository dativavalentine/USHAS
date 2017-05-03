<?php

use Illuminate\Database\Seeder;

class ClearencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert the number of clearence you want

        factory(App\Models\Clearence::class,20)->create();
    }
}
