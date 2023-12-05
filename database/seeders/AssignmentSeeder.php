<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('assignments')->insert([
            'name' => 'Learn Vue',
            'complete' => false,
            'tag' => 'vue',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Advanced Laravel recap',
            'complete' => false,
            'tag' => 'laravel',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Read Laravel documentation, identify learning areas',
            'complete' => false,
            'tag' => 'laravel',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Read Laravel documentation',
            'complete' => false,
            'tag' => 'laravel',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Learn Docker',
            'complete' => false,
            'tag' => 'docker',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Build API',
            'complete' => false,
            'tag' => 'laravel',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Inertia Js course',
            'complete' => false,
            'tag' => 'laravel',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Learn PEST',
            'complete' => false,
            'tag' => 'laravel',
            'created_at' => $now,
        ]);

        DB::table('assignments')->insert([
            'name' => 'Read into AWS',
            'complete' => false,
            'tag' => 'aws',
            'created_at' => $now,
        ]);
    }
}
