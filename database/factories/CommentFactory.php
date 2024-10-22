<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'title' => $this->faker->sentence,
            'comment' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5), // Assuming rating is between 1 and 5
            'status'=>1
         // 'product_id' => Products::inRandomOrder()->first()->id
        ];


    }

    public function forProduct($productId)
    {
        return $this->state([
            'product_id' => $productId,
        ]);
    }
}
