<?php

use App\measure;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        measure::create([

        	'name' => 'Longitud',

        ]);
        measure::create([

        	'name' => 'Peso',

        ]);
        measure::create([

        	'name' => 'Volumen',

        ]);
        measure::create([

        	'name' => 'Distancia',

        ]);

    
   
    }
 }

