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
        // $this->call(UsersTableSeeder::class);
		DB::table('users')->insert([
            'name' => 'Khirulnizam',
            'email' => 'kerul@gmail.com',
            'password' => bcrypt('abc123'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Shaqirin',
            'email' => 'shaq@gmail.com',
            'password' => bcrypt('shaq123'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Azri',
            'email' => 'azri@gmail.com',
            'password' => bcrypt('azri123'),
        ]);
    }
}





