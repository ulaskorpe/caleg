<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (\DB::connection()->getDatabaseName() && !Settings::find(5)) {
            Settings::create([
                'id' => 5,
                'name' => 'home',
                'value' => json_encode(
                    [
                        'slider' => [
                            'status' => true,
                            'content' => [
                                [
                                    'title' => 'Slider 1',
                                    'subtitle' => 'Sub Title 1',
                                    'description' => 'Description 1',
                                    'image' => 'slider-1.jpg',
                                    'button_link' => '#',
                                    'button_text' => 'Daha Fazlası...'
                                ],
                                [
                                    'title' => 'Slider 2',
                                    'subtitle' => 'Sub Title 2',
                                    'description' => 'Description 2',
                                    'image' => 'slider-2.jpg',
                                    'button_link' => '#',
                                    'button_text' => 'Daha Fazlası...'
                                ]
                            ],
                        ],
                        'cards' => [
                            'status' => true,
                            'content' => [
                                [
                                    'product_id' => '1',
                                    'button_link' => '#',
                                    'button_text' => 'Daha Fazlası...',
                                ],
                                [
                                    'product_id' => '1',
                                    'button_link' => '#',
                                    'button_text' => 'Daha Fazlası...',
                                ],
                                [
                                    'product_id' => '1',
                                    'button_link' => '#',
                                    'button_text' => 'Daha Fazlası...',
                                ],
                            ],
                        ],
                        'services' => [
                            'status' => true,
                            'content' => [
                                [
                                    'title' => 'Service 1',
                                    'description' => 'Description 1',
                                ],
                                [
                                    'title' => 'Service 2',
                                    'description' => 'Description 2',
                                ],
                                [
                                    'title' => 'Service 3',
                                    'description' => 'Description 3',
                                ],
                            ],
                        ],
                        'highlights' => [
                            'status' => true,
                            'content' => [
                                [
                                    'product_id' => '1',
                                ],
                                [
                                    'product_id' => '1',
                                ],
                                [
                                    'product_id' => '1',
                                ],
                                [
                                    'product_id' => '1',
                                ],
                                [
                                    'product_id' => '1',
                                ],
                                [
                                    'product_id' => '1',
                                ]
                            ],
                        ],
                        'comments' => [
                            'status' => true,
                            'content' => [
                                [
                                    'customer_name' => 'Name 1',
                                    'customer_title' => 'Title 1',
                                    'customer_comment' => 'Comment 1',
                                    'customer_rating' => '4',
                                ],
                                [
                                    'customer_name' => 'Name 2',
                                    'customer_title' => 'Title 2',
                                    'customer_comment' => 'Comment 2',
                                    'customer_rating' => '3',
                                ],
                            ],
                        ],
                        'bottom_slider' => [
                            'status' => true,
                            'content' => [
                                [
                                    'image' => 'bottom-slider-1.jpg',
                                ],
                                [
                                    'image' => 'bottom-slider-2.jpg',
                                ]
                            ],
                        ]
                    ],
                ),
                'description' => "App Home Settings"
            ]);
        }
    }
}
