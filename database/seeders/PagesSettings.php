<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create Hakkımızda, SSS, Ürün Belgileri, and Kvkk pages.
        Pages::create([
            'slug' => 'Hakkımızda',
            'content' => json_encode(
                [
                    'name' => 'Hakkımızda',
                    'banner' => '1-1-1920x400.jpg',
                    'content' => '<div class="row">
                                        <div class="col-lg-12">
                                            <div class="about-banner-content text-center section-space-bottom-95">
                                                <div class="section-title">
                                                    <span class="about-sub-title text-primary">Our History</span>
                                                    <h2 class="about-title mb-5">Tromic Car Parts Shop</h2>
                                                    <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisd nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut pers unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>',
                ],
                true
            )
        ]);
    }
}
