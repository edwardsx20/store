<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
    	
        $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            $email = $faker->unique()->email;
            DB::table('users')->insert([ //,
                'name' => $faker->name,
                'email' => $email,
                'rut' => $faker->unique()->ean8,
                'password' => Hash::make($email)
            ]);
        }    
    }
}
