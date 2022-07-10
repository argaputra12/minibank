<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Rekening;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crate transaksi using faker
        $faker = Factory::create();
        for($i = 0; $i < 10; $i++) {
            Transaksi::create([
                'pengirim_rekening_id' => $faker->numberBetween(1, 10),
                'penerima_rekening_id' => $faker->numberBetween(1, 10),
                'transaksi_date' => $faker->dateTimeBetween('-1 years', 'now'),
                'jenis_transaksi' => $faker->randomElement(['transfer', 'setor_tunai', 'tarik_tunai']),
                'nominal' => $faker->numberBetween(10000, 9999999999),
            ]);
        }

    }
}
