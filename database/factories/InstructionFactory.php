<?php

namespace Database\Factories;

use App\Models\Instruction;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instruction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->realText(100),
            'date' => $this->faker->dateTimeBetween('1day', '1month')->format('Y-m-d')
        ];
    }
}
