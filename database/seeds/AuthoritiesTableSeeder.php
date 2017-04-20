<?php

use Illuminate\Database\Seeder;

class AuthoritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert the number of authorities you want

        factory(App\Authority::class,15)->create();
    }
}
