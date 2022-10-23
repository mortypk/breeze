<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            DB::table('titles')->insert(['title' => 'CEO']);
            DB::table('titles')->insert(['title' => 'Operator']);
            DB::table('titles')->insert(['title' => 'Gate Keeper']);
            DB::table('titles')->insert(['title' => 'Manager']);
            \App\Models\User::factory(10)->create();
            \App\Models\Staff::factory(100)->create();
            \App\Models\Student::factory(100)->create();
            \App\Models\Product::factory(100)->create();
        
    }
}
