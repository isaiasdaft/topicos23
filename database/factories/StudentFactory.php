<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Program;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    
    public function definition()
    {
        return [
            'name'=>$this->faker->firstname(),
            'lastName'=>$this->faker->lastname(),
            'semester'=>$this->faker->numberBetween(1, 10),
            'control'=>$this->faker->randomNumber(8, true),
            'email'=>$this->faker->unique()->safeEmail(),
            'program_id'=> Program::all()->random()->id,
        ];
    }
}
