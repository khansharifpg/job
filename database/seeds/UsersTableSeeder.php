<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
 	{
		  DB:: table('users')->insert([
			'role_id' => '1',
		  	'name' => 'Md.Admin',
		  	'username' => 'admin',
		  	'email' => 'Admin@blog.com',
	      	'password' => bcrypt('rootadmin'),

	  	  ]);

		  DB:: table('users')->insert([
			'role_id' => '2',
		  	'name' => 'Md.Athor',
		  	'username' => 'athor',
		  	'email' => 'athor@blog.com',
	      	'password' => bcrypt('rootathor'),

	  	  ]);
    }
}
