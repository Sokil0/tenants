<?php

namespace Database\Factories;

use App\Enum\Languages;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lang' => Languages::ENGLISH->value,
            'tenant_hash' => $this->faker->uuid,
            'user_id' => User::all()->random()->id
        ];
    }
}
