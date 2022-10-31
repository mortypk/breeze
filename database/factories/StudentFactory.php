<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        $phoneId = \App\Models\Phone::inRandomOrder()->first();
        $classId = \App\Models\Grade::inRandomOrder()->first();
        return [
            'name' => fake()->name(),
            'fname' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->address(),
            'phone_id' => $phoneId,
            'grade_id' => $classId,
            'birthday' => fake()->dateTimeBetween('2001-01-01','2010-12-31'),
        ];
    }
}
