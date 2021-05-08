<?php

namespace Database\Factories\Publications;

use App\Models\Model;
use App\Models\Publications\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PublicationFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->text(40);
        $description = "";
        $preview_text = "";

        $count_p = rand(2, 10);
        $date = $this->faker->dateTimeBetween('-4 months', '-2 months');
        $user_id = 1;

        for ($i = 0; $i <= $count_p; $i++) {
            $random_length_text = rand(200, 500);
            $random_text = $this->faker->text($random_length_text);
            $preview_text = strlen($random_text) <= 240 ? "<p>{$random_text}</p>" : "<p>" . substr($random_text, 0, 240) . "...</p>";
            $description .= "<p>{$random_text}<p>";
        }

        $publication = [
            'slug'                  => Str::slug($title),
            'title'                 => $title,
            'description'           => $description,
            'is_published'          => true,
            'published_at'          => $date,
            'created_at'            => $date,
            'updated_at'            => $date,
            'user_id'               => $user_id,
            'preview_text'          => $preview_text,
            'link_to_preview_image' => null
        ];

        return $publication;
    }
}
