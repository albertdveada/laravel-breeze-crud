<?php

namespace Database\Seeders;

use App\Models\Member;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CUMA TEST BUAT 5 DATA
        for ($i = 0; $i < 200; $i++) {
            Member::create([
                'name' => fake()->name(),
                'phone' => fake()->phoneNumber(),
            ]);
        }
    }
}
