<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Get a random date somewhere the past 10 weeks or so
        $dateLoaned = $this->faker->dateTimeBetween('-10 weeks');

        // Due date is 21 days after $dateLoaned
        $dateDue = clone $dateLoaned; // Copy, NOT reference
        $dateDue->add(new \DateInterval('P21D'));

        // $dateReturned is null, unless already returned (eg. if due date expired)
        $dateReturned = null;
        if($dateDue < new \DateTime()) {
            $dateReturned = $this->faker->dateTimeBetween(
                $dateLoaned->format('Y-m-d'),
                $dateDue->format('Y-m-d')
            );

            $dateReturned->format('Y-m-d');
        }

        return [
            'member_id' => (Member::inRandomOrder()->first())->id,
            'book_id' => (Book::inRandomOrder()->first())->id,
            'date_loaned' => $dateLoaned->format('Y-m-d'),
            'date_due' => $dateDue->format('Y-m-d'),
            'date_returned' => $dateReturned,
        ];
    }
}
