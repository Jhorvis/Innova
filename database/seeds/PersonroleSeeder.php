<?php
use App\Personrole;
use Illuminate\Database\Seeder;

class PersonroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personrole::create([

        	'description' => 'Administrador del sistema',
        	'privilegy' => '1',

        ]);
          Personrole::create([

        	'description' => 'Gerente General',
        	'privilegy' => '2',


        ]);
           Personrole::create([

        	'description' => 'Sub Gerente',
        	'privilegy' => '7',


        ]);

            Personrole::create([

        	'description' => 'Vendedor',
        	'privilegy' => '3',


        ]);

            Personrole::create([

        	'description' => 'Bodeguero',
        	'privilegy' => '4',


        ]);

             Personrole::create([

        	'description' => 'Cliente',
        	'privilegy' => '5',

        ]);
             Personrole::create([

        	'description' => 'Repartidor',
        	'privilegy' => '6',

        ]);
             Personrole::create([

        	'description' => 'Contador',
        	'privilegy' => '8',

        ]);

             Personrole::create([

        	'description' => 'Auditor Contable',
        	'privilegy' => '9',

        ]);

            Personrole::create([

        	'description' => 'Auditor de sistemas',
        	'privilegy' => '10',

        ]);

              Personrole::create([

        	'description' => 'Supervisor de ventas',
        	'privilegy' => '11',

        ]);

            Personrole::create([

        	'description' => 'Diseñador gráfico',
        	'privilegy' => '12',

        ]);
            Personrole::create([

        	'description' => 'Supervisor de bodega',
        	'privilegy' => '13',

        ]);
    }
}
