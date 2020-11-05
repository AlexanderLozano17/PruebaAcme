<?php

use Illuminate\Database\Seeder;
use App\CarDrive;

class CarDriveSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array(
                'car_id' => 1,
                'person_id' => 2,
                'status' => 'A'
            ),
            array(
                'car_id' => 2,
                'person_id' => 3,
                'status' => 'A'
            ),
            array(
                'car_id' => 3,
                'person_id' => 2,
                'status' => 'A'
            ),
            array(
                'car_id' => 4,
                'person_id' => 4,
                'status' => 'A'
            ),
            array(
                'car_id' => 5,
                'person_id' => 8,
                'status' => 'A'
            ),
            array(
                'car_id' => 6,
                'person_id' => 30,
                'status' => 'A'
            ),
            array(
                'car_id' => 7,
                'person_id' => 17,
                'status' => 'I'
            ),
        ];

        foreach($data as $value) {
            CarDrive::create($value);
        }
    }
}
