<?php


namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $testimonials = [
            [
                'client_name' => 'John Smith',
                'client_position' => 'CEO',
                'client_company' => 'Tech Solutions Inc.',
                'content' => 'Their team delivered exceptional results. Our website traffic increased by 300% in just 3 months!',
                'rating' => 5,
                'client_image' => 'john-smith.jpg',
                'is_active' => true
            ],
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'Marketing Director',
                'client_company' => 'Creative Minds LLC',
                'content' => 'Professional, reliable, and highly skilled. The mobile app they built exceeded our expectations.',
                'rating' => 5,
                'client_image' => 'sarah-johnson.jpg',
                'is_active' => true
            ],
            [
                'client_name' => 'Mike Wilson',
                'client_position' => 'Product Manager',
                'client_company' => 'Innovate Corp',
                'content' => 'Outstanding service and support. They truly understand business needs and deliver solutions that work.',
                'rating' => 4,
                'client_image' => 'mike-wilson.jpg',
                'is_active' => true
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::firstOrCreate($testimonial);
        }
    }
}
