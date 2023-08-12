<?php

namespace Database\Seeders;

use App\Models\UserDomicilio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserDomicilio::factory(100)->create();
    }
}
