<?php

namespace Database\Factories;

use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Result::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement($array = ['Приседание', 'Отжимание', 'Подтягивание']),
            'result' => mt_rand(9,25),
            'unit' => mt_rand(1,3),
            'date_of_measurement' => $this->faker->dateTimeBetween($startDate = '-7 years', $endDate = '-3 years', $timezone = null),
        ];
    }
}
