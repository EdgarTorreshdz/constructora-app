<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => 'Construcción Residencial',
                'slug' => Str::slug('Construcción Residencial'),
                'description' => 'Diseño y construcción de viviendas unifamiliares y multifamiliares con los más altos estándares de calidad.',
                'short_description' => 'Viviendas unifamiliares y multifamiliares de calidad',
                'icon' => 'home',
                'sort_order' => 1,
                'image' => 'services/residencial.jpg'
            ],
            [
                'title' => 'Edificios Comerciales',
                'slug' => Str::slug('Edificios Comerciales'),
                'description' => 'Desarrollo de espacios comerciales modernos y funcionales para todo tipo de negocios.',
                'short_description' => 'Espacios comerciales modernos y funcionales',
                'icon' => 'building',
                'sort_order' => 2,
                'image' => 'services/comercial.jpg'
            ],
            [
                'title' => 'Remodelaciones',
                'slug' => Str::slug('Remodelaciones'),
                'description' => 'Transformación y modernización de espacios existentes para mejorar su funcionalidad y estética.',
                'short_description' => 'Transformación de espacios existentes',
                'icon' => 'tools',
                'sort_order' => 3,
                'image' => 'services/remodelaciones.jpg'
            ],
            [
                'title' => 'Consultoría',
                'slug' => Str::slug('Consultoría'),
                'description' => 'Asesoramiento especializado en todos los aspectos de tu proyecto constructivo.',
                'short_description' => 'Asesoramiento especializado en construcción',
                'icon' => 'consultation',
                'sort_order' => 4,
                'image' => 'services/consultoria.jpg'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
