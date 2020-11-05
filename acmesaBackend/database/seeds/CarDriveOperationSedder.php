<?php

use Illuminate\Database\Seeder;
use App\CarDriveOperation;

class CarDriveOperationSedder extends Seeder
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
                'type_operation_id' => rand(1,6),
                'car_drive_id' => 1,
            ),
            array(
                'type_operation_id' => rand(1,6),
                'car_drive_id' =>2,
            ),
            array(
                'type_operation_id' => rand(1,6),
                'car_drive_id' =>3,
            ),
            array(
                'type_operation_id' => rand(1,6),
                'car_drive_id' =>4,
            ),
            array(
                'type_operation_id' => rand(1,6),
                'car_drive_id' =>5,
            ),
            array(
                'type_operation_id' => rand(1,6),
                'car_drive_id' =>6,
            ),
        ];

        foreach($data as $value) {
            CarDriveOperation::create($value);
        }
    }
}
