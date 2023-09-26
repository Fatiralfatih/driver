<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()
            ->count(6)
            ->sequence(
                [
                    'username' => 'admin', 
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'role' => 'admin'
                ],
                [
                    'username' => 'fatir', 
                    'name' => 'Fatir Al Fatih.SH',
                    'email' => 'fatiralfath00@gmail.com',
                    'role' => 'driver'
                ],
                [
                    'username' => 'alfatih', 
                    'name' => 'Faytr.S.Kom',
                    'email' => 'faytr@gmail.com',
                    'role' => 'driver'
                ],
                [
                    'username' => 'costumer1', 
                    'name' => 'Costumer1',
                    'email' => 'costumer1@gmail.com',
                    'role' => 'costumer'
                ],
                [
                    'username' => 'costumer2', 
                    'name' => 'Costumer2',
                    'email' => 'costumer2@gmail.com',
                    'role' => 'costumer'
                ],
                [
                    'username' => 'costumer3', 
                    'name' => 'Costumer3',
                    'email' => 'costumer3@gmail.com',
                    'role' => 'costumer'
                ],
            )
            ->create();

        Category::factory()
            ->count(3)
            ->sequence(
                ['name' => 'Mobil'],
                ['name' => 'Sepeda Motor'],
                ['name' => 'Pesawat'],
            )
            ->create();

        Vehicle::factory(10)->create();

    }
}
