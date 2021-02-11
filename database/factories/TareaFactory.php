<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tarea::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Descripcion' => $this->faker->unique()->sentence(10, true),
            'prioridad'   => $this->faker->numberBetween(1,4),
            'usuario_id'  => $this->faker->numberBetween(1,30),
        ];
    }
}
