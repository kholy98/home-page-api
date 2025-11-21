<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'title' => 'About Our Company',
            'content' => 'We are a team of passionate developers, designers, and strategists dedicated to delivering exceptional digital solutions. With years of experience in the industry, we help businesses transform their ideas into successful digital products.',
            'image' => 'about-us.jpg',
            'features' => json_encode([
                '5+ Years of Experience',
                '50+ Successful Projects',
                '24/7 Customer Support',
                'Award Winning Team'
            ]),
            'is_active' => true
        ]);
    }
}
