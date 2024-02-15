<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobType::insert(
            [
                [
                    'name' => 'long-term',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'short-term',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'one-event-contract',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
