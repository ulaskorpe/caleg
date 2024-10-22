<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings>
 */
class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'value' => json_encode(
                [
                    'site_name' => 'Laravel',
                    'site_desciption' => 'site_description',
                    'site_link' => null ,
                    'site_https' => 1 ,
                    'email' => null,
                    'phone' => null,
                    'google_location' => null,
                    'contact_email' => null,
                ],true),
            'description' => "name Settings"
        ];
    }
}
