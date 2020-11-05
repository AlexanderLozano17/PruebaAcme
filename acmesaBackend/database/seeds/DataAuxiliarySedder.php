<?php

use Illuminate\Database\Seeder;
use App\DataAuxiliary;

class DataAuxiliarySedder extends Seeder
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
                'code' => 'CPC',
                'definition' => 'PROPIETARIO',
                'description' => ''
            ),
            array(
                'code' => 'CPC',
                'definition' => 'CONDUCTOR',
                'description' => ''
            ),
            array(
                'code' => 'PPC',
                'definition' => 'PARICULAR',
                'description' => ''
            ),
            array(
                'code' => 'PPC',
                'definition' => 'PUBLICO',
                'description' => '' 
            ),
        ];

        foreach ($data as $value) {
            DataAuxiliary::create($value);
        }
        
    }
}
