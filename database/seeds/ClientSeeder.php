<?php
use App\Client;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Client::create([

        	'name' => 'Cliente Universal',
        	'dni' => '00.000.000-0',
        	'direction' => 'Región metropolitana de santiago, Santiago de chile',
        	'phone' => '+56 9 000 000 000',
        	'state' => 1

        ]);
    }
}
