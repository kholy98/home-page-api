<?php


namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run()
    {
        Hero::create([
            'title' => 'Welcome to Our Amazing Platform',
            'subtitle' => 'We provide the best services to help your business grow and succeed in the digital world.',
            'button_text' => 'Get Started',
            'button_link' => '/get-started',
            'background_image' => 'hero-bg.jpg',
            'is_active' => true
        ]);
    }
}
