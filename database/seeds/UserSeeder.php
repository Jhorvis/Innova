<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        	'name' => 'Jhorvis',
        	'surname' => 'Sanchez',
        	'secondSurname' => 'Oquendo',
        	'documentIdentity' => '25957563k',
        	'firstCellphone' => '996848765',
        	'email' => 'jhorvissanchez2@gmail.com',
        	'password' => bcrypt('18663835'),
        	'personRoleId' => 1

        ]);
    }
}
