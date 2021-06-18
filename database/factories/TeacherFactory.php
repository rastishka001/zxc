<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'date_of_birth' => $this->faker->dateTimeBetween($startDate = '-27 years', $endDate = '-20 years', $timezone = null),
            'sports_category' => mt_rand(1,3),
            'cell_phone' => '+7' . mt_rand(800, 900) . mt_rand(1000000, 9999999),
        ];
    }
}
