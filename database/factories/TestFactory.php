<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Test::class;
    public function definition()
    {
        return [
            'text' => $this->faker->sentence(),
        ];
    }
}
