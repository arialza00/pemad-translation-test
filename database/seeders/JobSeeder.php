<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::insert(
            [
                [
                    'name' => 'translation/localization',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'subtitling',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'transcription',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'voice over',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'sworn translation',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'copywriting',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'editing/proofreading',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'interpretation',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'desktop publishing',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
