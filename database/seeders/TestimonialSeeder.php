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
                'author' => 'María González',
                'position' => 'Propietaria de Casa Residencial',
                'company' => 'Casa Residencial',
                'content' => 'Quedé muy satisfecha con el trabajo de Constructora Ejemplo. Cumplieron con todos los plazos y el resultado final superó mis expectativas. ¡Los recomiendo totalmente!',
                'rating' => 5,
                'approved' => true,
                'featured' => true,
                'sort_order' => 1,
                'project_type' => 'residencial'
            ],
            [
                'author' => 'Carlos Rodríguez',
                'position' => 'Director Comercial',
                'company' => 'Empresa ABC',
                'content' => 'Profesionalismo y calidad en cada etapa del proyecto. Nuestras nuevas oficinas son exactamente como las habíamos soñado.',
                'rating' => 5,
                'approved' => true,
                'featured' => true,
                'sort_order' => 2,
                'project_type' => 'comercial'
            ],
            [
                'author' => 'Ana Martínez',
                'position' => 'Gerente de Proyectos',
                'company' => 'Compañía XYZ',
                'content' => 'Trabajar con Constructora Ejemplo fue una experiencia excelente. Su atención al detalle y compromiso con la calidad son admirables.',
                'rating' => 5,
                'approved' => true,
                'featured' => true,
                'sort_order' => 3,
                'project_type' => 'corporativo'
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
