<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Note: Disabled hashing due to performance
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->streetAddress,
            'zipcode' => $this->faker->postcode,
            'city' => $this->faker->city,

            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$ZdA9UEdPjfpbX4Gq15NfY.reMtPcil1mEacBBWUowSUVXh4oGFxiK', //Hash::make('password'),

            'phone' => $this->faker->phoneNumber,

            'card_number' => $this->faker->numberBetween(10000000, 99999999),
        ];
    }
}
