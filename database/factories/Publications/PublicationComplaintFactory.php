<?php

namespace Database\Factories\Publications;

use App\Models\Publications\Publication;
use App\Models\Publications\PublicationComplaint;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PublicationComplaintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PublicationComplaint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $description    = $this->faker->unique()->text(rand(10, 255));
        $is_checked = (rand(0, 10) >= 8);
        $user_id = User::all()->random()->id;
        $publication_id = Publication::all()->random()->id;
        $date = $this->faker->dateTimeBetween('-4 months', '-2 months');

        return [
            'description'       => $description,
            'is_checked'        => $is_checked,
            'user_id'           => $user_id,
            'publication_id'    => $publication_id,
            'created_at'        => $date,
            'updated_at'        => $date
        ];
    }
}
