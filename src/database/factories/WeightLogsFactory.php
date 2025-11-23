<?php

namespace Database\Factories;

use App\Models\WeightLogs;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'date'=>$this->faker->date,
            'weight'=>$this->faker->randomFloat(1,0,999),
            'calories'=>$this->faker->randomNumber,
            'exercise_time'=>$this->faker->time,
            'exercise_content'=>$this->faker->text,
        ];
    }
}
