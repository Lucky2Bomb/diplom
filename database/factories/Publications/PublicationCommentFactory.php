<?php

namespace Database\Factories\Publications;

use App\Models\Publications\Publication;
use App\Models\Publications\PublicationComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PublicationCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PublicationComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = DB::table('users');
        $publications = DB::table('publications');

        $description    = $this->faker->unique()->text(rand(10, 255));
        $user_id        = rand(1, $users->count());
        $publication_id = rand(1, $publications->count());

        return [
            'description'       => $description,
            'user_id'           => $user_id,
            'publication_id'    => $publication_id,
        ];
    }
}
