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
        \App\Models\User::factory()->create([
                'name' => 'nova',
                'email' => 'xpk123@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'asdfasdfsf',
            ]);
            DB::table('titles')->insert(['title' => 'CEO']);
            DB::table('titles')->insert(['title' => 'Operator']);
            DB::table('titles')->insert(['title' => 'Gate Keeper']);
            DB::table('titles')->insert(['title' => 'Manager']);
            for ($i=0; $i < 9; $i++) { 
                DB::table('grades')->insert(['grade' => "Class $i"]);
            }
            \App\Models\User::factory(10)->create();
            \App\Models\Phone::factory(10)->create();
            \App\Models\Staff::factory(100)->create();
            \App\Models\Student::factory(100)->create();
            \App\Models\Product::factory(100)->create();
        
    }
}
