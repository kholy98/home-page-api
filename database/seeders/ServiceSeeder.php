<?php


namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Custom web applications built with modern technologies and best practices.',
                'icon' => 'fas fa-code',
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Native and cross-platform mobile applications for iOS and Android.',
                'icon' => 'fas fa-mobile-alt',
                'sort_order' => 2,
                'is_active' => true
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Beautiful and intuitive user interfaces that enhance user experience.',
                'icon' => 'fas fa-paint-brush',
                'sort_order' => 3,
                'is_active' => true
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Comprehensive digital marketing strategies to grow your online presence.',
                'icon' => 'fas fa-chart-line',
                'sort_order' => 4,
                'is_active' => true
            ]
        ];

        foreach ($services as $service) {
            Service::firstOrCreate($service);
        }
    }
}
