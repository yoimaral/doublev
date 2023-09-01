<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $user = new User();
        $user->name = "Paola";
        $user->email = "paola@gmail.com";
        $user->phone = $faker->numberBetween(1, 11);
        $user->password = 12345678;
        $user->save();

        $user = new User();
        $user->name = "carlos";
        $user->email = "carlos@gmail.com";
        $user->phone = $faker->numberBetween(1, 11);
        $user->password = 12345678;
        $user->save();
    }
}
