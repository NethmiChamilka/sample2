<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

       
        for ($i = 0; $i < 50; $i++) {
            Member::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'sex' => $faker->randomElement(['male', 'female']),
            ]);
        }
    }
}
