<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '087812345678',
                'role' => 'admin',
                'password' => Hash::make('Admin123'),
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'phone' => '087812345678',
                'role' => 'member',
                'password' => Hash::make('Password123'),
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ]
        ]);
        
        $faker = Faker::create('id_ID');
 
    	for($i = 2; $i <= 10; $i++){
    		DB::table('users')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'role' => 'member',
    			'password' => Hash::make('Password123'),
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
    		]);
    	}
    }
}
