<?php

namespace Database\Factories\Publications;

use App\Models\Model;
use App\Models\Publications\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

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
        $faker_ru = Faker::create('ru_RU');
        $title = $this->faker->unique()->text(40);
        $description = "";
        $preview_text = "";

        $count_p = rand(2, 10);
        $date = $this->faker->dateTimeBetween('-4 months', '-2 months');
        $user_id = 1;
        $is_published = rand(0, 10) > 2;

        for ($i = 0; $i <= $count_p; $i++) {
            $random_length_text = rand(200, 500);
            // $random_text = $this->faker->text($random_length_text);
            $random_text = $faker_ru->text($random_length_text);
            $preview_text = strlen($random_text) <= 240 ? $random_text : substr($random_text, 0, 240);
            $description .= "<p>{$random_text}<p>";
        }

        $random_image_file = null;
        if (rand(0, 10) >= 2) {
            $files = scandir(public_path() . '\upload');
            $random_image_file = $files[rand(2, count($files) - 1)];
            if($random_image_file === "no-image.jpg") {
                $random_image_file = null;
            }
        }

        $publication = [
            'slug'          => Str::slug($title),
            'title'         => $title,
            'description'   => $description,
            'is_published'  => $is_published,
            'published_at'  => $is_published ? $date : null,
            'created_at'    => $date,
            'updated_at'    => $date,
            'user_id'       => $user_id,
            'preview_text'  => $preview_text,
            'preview_image' => $random_image_file
        ];

        return $publication;
    }
}
