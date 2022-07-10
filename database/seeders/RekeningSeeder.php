<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Rekening;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create rekening using faker
        $faker = Factory::create();
        $user = User::all();
        foreach($user as $key => $value) {
            Rekening::create([
                'user_id' => $value->id,
                'rekening_number' => $faker->unique()->numberBetween(100000000, 999999999),
            ]);
        }

    }
}
