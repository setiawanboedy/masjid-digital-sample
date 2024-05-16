<?php

namespace Database\Factories;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Donation::class;
    public function definition(): array
    {
        return [
            'program_id'=> 1,
            'asbab_id'=>1,
            'donatur_code'=>null,
            'gender'=>$this->faker->randomElement([1,2]),
            'nominal'=> $this->faker->randomNumber(5, true),
            'name'=> $this->faker->name(),
            'date'=> $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'description'=>$this->faker->text(),
        ];
    }
}
