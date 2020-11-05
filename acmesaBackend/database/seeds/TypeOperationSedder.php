<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TypeOperation;

class TypeOperationSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = "ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";

        $data = [
            array (
                'operation_name' => 'CARGA PESADA',
                'description' =>  $text
            ),
            array (
                'operation_name' => 'VIAJE CON PASAJEROS',
                'description' =>  $text
            ),
            array (
                'operation_name' => 'TRASPORTE FUERA DE LA CIUDAD ',
                'description' =>  $text
            ),
            array (
                'operation_name' => 'EN MECANICA',
                'description' =>  $text
            ),
            array (
                'operation_name' => 'MANTENIMIENTO',
                'description' =>  $text
            ),
            array (
                'operation_name' => 'TRASNPORTE CONTRATO',
                'description' =>  $text
            ),
        ];

        foreach ($data as $value) {
            TypeOperation::create($value);
        }
    }
}
