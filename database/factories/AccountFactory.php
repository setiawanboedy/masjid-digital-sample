<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Program;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Account::class;
    public function definition(): array
    {
        $program = Program::find(1);
        $saldo = $program->saldo;
        $donation = Donation::factory();
    
        $saldo->amount = $saldo->amount + $donation->nominal;
        $saldo->save();

        return [
            'program_id'=> 1,
            'donation_id'=>$donation->id,
            'debit'=>$donation->nominal,
            'saldo'=> $saldo->amount,
            'amil_amount'=> $donation->nominal * ($program->amil/100),
            'date'=> $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'description'=>$this->faker->text(),
        ];
    }
}
