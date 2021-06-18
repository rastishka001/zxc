<?php

namespace Database\Factories;

use App\Models\CompleteProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompleteProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompleteProgram::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'deadlines' => $this->faker->dateTimeBetween($startDate = '-27 years', $endDate = '-20 years', $timezone = null),
            'shape' =>  $this->faker->randomElement($array = array ('Приседание','Отжимание','Подтягивание')),
            'naming' => $this->faker->randomElement($array = array ('Аэробные','Анаэробные','Смешанные')),
            'coach' => $this->faker->randomElement($array = array ('Ворошилова','Паймаков','Кудрявцев')),
            'volume_in_hours' => mt_rand(1,3),
            'description' => $this->faker->text($min=400, $max=5000),
        ];
    }
}
