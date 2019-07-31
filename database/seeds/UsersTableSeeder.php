<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                    
	        'first_name' => 'Admin',
            'last_name' => 'User',
	        'email' => 'adminuser@fcbank.us',
	        'password' => bcrypt('123456'),
	        'email_verified_at' => date('Y-m-d H:i:s'),
            'is_admin' => 1,
	        'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),      
	    ]);
        DB::table('users')->insert([
                    
            'first_name' => 'User',
            'last_name' => 'One',
            'email' => 'userone@fcbank.us',
            'password' => bcrypt('123456'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            //'is_admin' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),      
        ]);
    }
}
