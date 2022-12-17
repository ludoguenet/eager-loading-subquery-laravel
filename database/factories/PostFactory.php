<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this
                ->faker
                ->words(
                    nb: random_int(5, 7),
                    asText: true,
                ),
            'content' => $this
                ->faker
                ->sentences(
                    nb: random_int(1, 3),
                    asText: true,
                ),
        ];
    }
}
