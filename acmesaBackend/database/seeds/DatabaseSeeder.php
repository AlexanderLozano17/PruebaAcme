<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PersonSedder::class);
        $this->call(TypeOperationSedder::class);
        $this->call(DataAuxiliarySedder::class);        
        $this->call(CarSedder::class);
        $this->call(CarDriveSedder::class);
        $this->call(CarDriveOperationSedder::class);
    }
}
