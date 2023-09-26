<?php

namespace Database\Factories;

use App\Teman;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemanFactory extends Factory
{
    protected $model = Teman::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nim' => $this->faker->unique()->numerify('##########'),
            'jurusan' => $this->faker->word,
        ];
    }
}
