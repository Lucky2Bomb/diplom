<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $login = $this->faker->unique()->userName();
        $email = $this->faker->unique()->safeEmail();
        $slug = Str::slug($login);

        $created_at = $this->faker->dateTimeBetween('-4 months', '-2 months');
        $email_verified_at = $this->faker->dateTimeBetween('-1 months', '-1 day');

        $group_id = rand(1, 4);
        $group_id = $group_id == 1? null : $group_id;

        $avatar = null;
        if (rand(0, 11) >= 2) {
            $files = scandir(public_path() . '\avatar');
            $avatar = $files[rand(2, count($files) - 1)];
        }

        $header_background_image = null;
        if (rand(0, 6) >= 2) {
            $files = scandir(public_path() . '\background_image');
            $header_background_image = $files[rand(2, count($files) - 1)];
        }

        return [
            'login'                     => $login,
            'email'                     => $email,
            'slug'                      => $slug,

            'name'                      => $this->faker->firstName(),
            'surname'                   => $this->faker->lastName(),
            'patronymic'                => null,

            'position_name'             => (rand(0, 20) > 2 ? "студент" : "преподаватель"),
            'group_id'                  => $group_id,

            'created_at'                => $created_at,
            'updated_at'                => $created_at,
            'email_verified_at'         => $email_verified_at,

            'header_background_image'   => $header_background_image,
            'avatar'                    => $avatar,

            'password'                  => Hash::make('12345678'),
            'remember_token'            => Str::random(60),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => (rand(0, 10) > 2),
            ];
        });
    }
}
