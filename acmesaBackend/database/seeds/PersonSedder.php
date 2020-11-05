<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Person::class, 40)->create();
    }
}
