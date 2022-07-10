<?php

namespace Database\Seeders;

require_once 'vendor/autoload.php';
use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create basic user
        $user = [
                [
                    'name' => 'Test User',
                    'email' => 'user@user',
                    'username' => 'user',
                    'password' => bcrypt('user'),
                    'address' => 'Jl. Test',
                    'phone' => '081234567890',
                    'role' => 'user',
                ],
                [
                    'name' => 'Test Admin',
                    'email' => 'admin@admin',
                    'username' => 'admin',
                    'password' => bcrypt('admin'),
                    'address' => 'Jl. Test',
                    'phone' => '081234567890',
                    'role' => 'admin',
                ],
                [
                    'name' => 'Test CS',
                    'email' => 'cs@cs',
                    'username' => 'cs',
                    'password' => bcrypt('cs'),
                    'address' => 'Jl. Test',
                    'phone' => '081234567890',
                    'role' => 'cs',
                ],
                [
                    'name' => 'Test Teller',
                    'email' => 'teller@teller',
                    'username' => 'teller',
                    'password' => bcrypt('teller'),
                    'address' => 'Jl. Test',
                    'phone' => '081234567890',
                    'role' => 'teller',
                ],
            ];

            foreach($user as $key => $value) {
                User::create($value);
            }

            // using faker
            $faker = Factory::create();

            // create 20 users
            for($i = 0; $i < 20; $i++) {
                User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'username' => $faker->userName,
                    'password' => bcrypt('password'),
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber,
                    'role' => 'user',
                ]);
            }

            // create 5 admins
            for($i = 0; $i < 5; $i++) {
                User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'username' => $faker->userName,
                    'password' => bcrypt('password'),
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber,
                    'role' => 'admin',
                ]);
            }

            // create 5 cs
            for($i = 0; $i < 5; $i++) {
                User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'username' => $faker->userName,
                    'password' => bcrypt('password'),
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber,
                    'role' => 'cs',
                ]);
            }

            // create 5 tellers
            for($i = 0; $i < 5; $i++) {
                User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'username' => $faker->userName,
                    'password' => bcrypt('password'),
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber,
                    'role' => 'teller',
                ]);
            }

    }
}
