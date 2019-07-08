<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$this->truncateTables([
    		'measures',
    		'measurementunits',
            'users',
            'personroles',
            'products',
            'clients'
    		]);

        $this->call(MeasureSeeder::class);
        $this->call(MeasurementunitsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PersonroleSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ClientSeeder::class);
    }

    protected function truncateTables (array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tables as $table) {

    		DB::table($table)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
