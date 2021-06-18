<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function admin()
    {
        return $this->state([
            'id' => 1,
            'name' => 'Антон',
            'email' => 'admin@test.ru',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(10),
        ]);
    }
}