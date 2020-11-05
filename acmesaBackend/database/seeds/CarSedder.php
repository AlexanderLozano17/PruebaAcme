<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letter = ['A','B','C','D', 'F'];
        $color = ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Cafe', 'Blanco'];
        $mark = ['Mazda', 'Renault', 'Chevrolet', 'BMW'];

        $data = [
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            ),
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            ),
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            ),
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            ),
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            ),
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            ),
            array (
                'license_plate' => $letter[rand(0,4)].$letter[rand(0,4)].$letter[rand(0,4)].' '.rand(0,9).rand(0,9).$letter[rand(0,4)],
                'color' => $color[rand(0,5)],
                'mark' => $mark[rand(0,3)],
                'type_car_id' => rand(3,4),
                'owner_id' => rand(1,40),
            )
        ];

        foreach($data as $value) {
            Car::create($value);
        }
    }
}
