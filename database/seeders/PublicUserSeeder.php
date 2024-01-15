<?php

namespace Database\Seeders;

use App\Models\PublicUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = PublicUser::factory()->count(100)->create();
    }
}
