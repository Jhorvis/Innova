<?php

use App\Measurementunit;
use Illuminate\Database\Seeder;

class MeasurementunitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Measurementunit::create([

        	'measureId' => '1',
        	'name' => 'Milimetros',
        	'symbol' => 'mm',

        ]);
        Measurementunit::create([

        	'measureId' => '1',
        	'name' => 'Centimetros',
        	'symbol' => 'cm',

        ]);
        Measurementunit::create([

        	'measureId' => '1',
        	'name' => 'Metros',
        	'symbol' => 'mts',

        ]);
        Measurementunit::create([

        	'measureId' => '2',
        	'name' => 'Gramos',
        	'symbol' => 'Gr',

        ]);
        Measurementunit::create([

        	'measureId' => '2',
        	'name' => 'Milimetros',
        	'symbol' => 'Kgr',

        ]);
        Measurementunit::create([

        	'measureId' => '3',
        	'name' => 'Litros',
        	'symbol' => 'Lts',

        ]);
        Measurementunit::create([

        	'measureId' => '3',
        	'name' => 'Onzas',
        	'symbol' => 'Oz',

        ]);
         Measurementunit::create([

        	'measureId' => '3',
        	'name' => 'Centimetros Cubicos',
        	'symbol' => 'CC',

        ]);
    }
}
