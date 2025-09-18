<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'Edificio Corporativo Central',
                'slug' => Str::slug('Edificio Corporativo Central'),
                'short_description' => 'Moderno edificio de 20 pisos en zona financiera',
                'description' => 'Construcción completa de edificio corporativo con acabados de lujo, estacionamiento subterráneo y áreas comunes.',
                'location' => 'Ciudad de México',
                'budget' => 25000000,
                'start_date' => '2023-01-15',
                'end_date' => '2024-06-30',
                'status' => 'completed',
                'cover_image' => 'projects/edificio-corporativo.jpg',
                'gallery_images' => json_encode([
                    'projects/gallery1.jpg',
                    'projects/gallery2.jpg',
                    'projects/gallery3.jpg'
                ]),
                'featured' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Conjunto Habitacional Las Lomas',
                'slug' => Str::slug('Conjunto Habitacional Las Lomas'),
                'short_description' => '120 departamentos de lujo',
                'description' => 'Desarrollo habitacional con amenities premium, alberca, gimnasio y áreas verdes.',
                'location' => 'Guadalajara',
                'budget' => 18000000,
                'start_date' => '2024-03-01',
                'end_date' => null,
                'status' => 'in_progress',
                'cover_image' => 'projects/conjunto-lomas.jpg',
                'gallery_images' => json_encode([
                    'projects/lomas1.jpg',
                    'projects/lomas2.jpg'
                ]),
                'featured' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Residencial Vista del Mar',
                'slug' => Str::slug('Residencial Vista del Mar'),
                'short_description' => 'Conjunto de casas con vista al mar en Cancún',
                'description' => 'Construcción de 40 casas modernas con acceso a club de playa, alberca y seguridad 24/7.',
                'location' => 'Cancún, Quintana Roo',
                'budget' => 22000000,
                'start_date' => '2022-05-10',
                'end_date' => '2023-11-30',
                'status' => 'completed',
                'cover_image' => 'projects/residencial-vista-mar.jpg',
                'gallery_images' => json_encode([
                    'projects/vista1.jpg',
                    'projects/vista2.jpg'
                ]),
                'featured' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Plaza Comercial Andares',
                'slug' => Str::slug('Plaza Comercial Andares'),
                'short_description' => 'Centro comercial de 3 niveles',
                'description' => 'Desarrollo de plaza comercial con 60 locales, zona de food court y estacionamiento techado.',
                'location' => 'Guadalajara, Jalisco',
                'budget' => 30000000,
                'start_date' => '2021-09-01',
                'end_date' => '2023-05-15',
                'status' => 'completed',
                'cover_image' => 'projects/plaza-andares.jpg',
                'gallery_images' => json_encode([
                    'projects/andares1.jpg',
                    'projects/andares2.jpg'
                ]),
                'featured' => false,
                'sort_order' => 4
            ],
            [
                'title' => 'Hotel Riviera Palace',
                'slug' => Str::slug('Hotel Riviera Palace'),
                'short_description' => 'Resort de lujo frente al mar',
                'description' => 'Construcción de resort con 200 habitaciones, spa, restaurantes y alberca infinity.',
                'location' => 'Playa del Carmen',
                'budget' => 50000000,
                'start_date' => '2020-03-01',
                'end_date' => '2022-12-30',
                'status' => 'completed',
                'cover_image' => 'projects/hotel-riviera.jpg',
                'gallery_images' => json_encode([
                    'projects/hotel1.jpg',
                    'projects/hotel2.jpg'
                ]),
                'featured' => true,
                'sort_order' => 5
            ],
            [
                'title' => 'Torre de Departamentos Aurora',
                'slug' => Str::slug('Torre de Departamentos Aurora'),
                'short_description' => 'Torre de 25 pisos con amenidades exclusivas',
                'description' => 'Proyecto vertical con departamentos de lujo, alberca en roof top y gimnasio.',
                'location' => 'Monterrey',
                'budget' => 35000000,
                'start_date' => '2023-01-01',
                'end_date' => null,
                'status' => 'in_progress',
                'cover_image' => 'projects/torre-aurora.jpg',
                'gallery_images' => json_encode([
                    'projects/aurora1.jpg',
                    'projects/aurora2.jpg'
                ]),
                'featured' => true,
                'sort_order' => 6
            ],
            [
                'title' => 'Clínica Médica Integral',
                'slug' => Str::slug('Clínica Médica Integral'),
                'short_description' => 'Hospital privado con especialidades',
                'description' => 'Construcción de clínica con quirófanos, consultorios y laboratorio de diagnóstico.',
                'location' => 'Querétaro',
                'budget' => 15000000,
                'start_date' => '2022-04-15',
                'end_date' => '2023-09-30',
                'status' => 'completed',
                'cover_image' => 'projects/clinica-integral.jpg',
                'gallery_images' => json_encode([
                    'projects/clinica1.jpg'
                ]),
                'featured' => false,
                'sort_order' => 7
            ],
            [
                'title' => 'Parque Industrial Norte',
                'slug' => Str::slug('Parque Industrial Norte'),
                'short_description' => 'Naves industriales para logística',
                'description' => 'Complejo con 10 naves industriales para empresas de logística y manufactura.',
                'location' => 'San Luis Potosí',
                'budget' => 28000000,
                'start_date' => '2021-07-01',
                'end_date' => '2023-03-01',
                'status' => 'completed',
                'cover_image' => 'projects/parque-industrial.jpg',
                'gallery_images' => json_encode([
                    'projects/parque1.jpg'
                ]),
                'featured' => false,
                'sort_order' => 8
            ],
            [
                'title' => 'Centro Deportivo Horizonte',
                'slug' => Str::slug('Centro Deportivo Horizonte'),
                'short_description' => 'Club deportivo con canchas y gimnasio',
                'description' => 'Construcción de complejo deportivo con alberca olímpica, canchas de tenis y área de crossfit.',
                'location' => 'Mérida, Yucatán',
                'budget' => 12000000,
                'start_date' => '2022-08-15',
                'end_date' => '2023-12-01',
                'status' => 'completed',
                'cover_image' => 'projects/centro-deportivo.jpg',
                'gallery_images' => json_encode([
                    'projects/deportivo1.jpg'
                ]),
                'featured' => false,
                'sort_order' => 9
            ],
            [
                'title' => 'Biblioteca Metropolitana',
                'slug' => Str::slug('Biblioteca Metropolitana'),
                'short_description' => 'Centro cultural y biblioteca pública',
                'description' => 'Edificio con salas de lectura, auditorio y áreas digitales modernas.',
                'location' => 'León, Guanajuato',
                'budget' => 9000000,
                'start_date' => '2020-01-01',
                'end_date' => '2022-06-30',
                'status' => 'completed',
                'cover_image' => 'projects/biblioteca.jpg',
                'gallery_images' => json_encode([
                    'projects/biblio1.jpg'
                ]),
                'featured' => false,
                'sort_order' => 10
            ],
            [
                'title' => 'Escuela Primaria Siglo XXI',
                'slug' => Str::slug('Escuela Primaria Siglo XXI'),
                'short_description' => 'Plantel escolar con instalaciones modernas',
                'description' => 'Construcción de primaria con aulas interactivas, biblioteca y laboratorios.',
                'location' => 'Puebla',
                'budget' => 8000000,
                'start_date' => '2021-09-01',
                'end_date' => '2022-12-15',
                'status' => 'completed',
                'cover_image' => 'projects/escuela-sigloxxi.jpg',
                'gallery_images' => json_encode([
                    'projects/escuela1.jpg'
                ]),
                'featured' => false,
                'sort_order' => 11
            ],
            [
                'title' => 'Residencial Jardines del Lago',
                'slug' => Str::slug('Residencial Jardines del Lago'),
                'short_description' => 'Fraccionamiento privado con áreas verdes',
                'description' => 'Desarrollo de 80 casas con parques, ciclovías y lago artificial.',
                'location' => 'Toluca, Estado de México',
                'budget' => 20000000,
                'start_date' => '2023-02-01',
                'end_date' => null,
                'status' => 'in_progress',
                'cover_image' => 'projects/jardines-lago.jpg',
                'gallery_images' => json_encode([
                    'projects/lago1.jpg'
                ]),
                'featured' => true,
                'sort_order' => 12
            ],
            [
                'title' => 'Torre Financiera Reforma',
                'slug' => Str::slug('Torre Financiera Reforma'),
                'short_description' => 'Rascacielos de oficinas AAA',
                'description' => 'Construcción de torre de 40 pisos en Paseo de la Reforma con certificación LEED.',
                'location' => 'Ciudad de México',
                'budget' => 75000000,
                'start_date' => '2022-01-01',
                'end_date' => null,
                'status' => 'in_progress',
                'cover_image' => 'projects/torre-reforma.jpg',
                'gallery_images' => json_encode([
                    'projects/reforma1.jpg'
                ]),
                'featured' => true,
                'sort_order' => 13
            ],
            [
                'title' => 'Parque Tecnológico Innovar',
                'slug' => Str::slug('Parque Tecnológico Innovar'),
                'short_description' => 'Centro de innovación y coworking',
                'description' => 'Espacio para startups y empresas de tecnología con laboratorios y salas de juntas.',
                'location' => 'Querétaro',
                'budget' => 16000000,
                'start_date' => '2021-06-15',
                'end_date' => '2023-08-01',
                'status' => 'completed',
                'cover_image' => 'projects/parque-tecnologico.jpg',
                'gallery_images' => json_encode([
                    'projects/tech1.jpg'
                ]),
                'featured' => false,
                'sort_order' => 14
            ],
            [
                'title' => 'Residencial Altos del Bosque',
                'slug' => Str::slug('Residencial Altos del Bosque'),
                'short_description' => 'Casas en un entorno natural',
                'description' => 'Proyecto residencial rodeado de naturaleza con diseño sustentable.',
                'location' => 'Chiapas',
                'budget' => 10000000,
                'start_date' => '2022-11-01',
                'end_date' => null,
                'status' => 'in_progress',
                'cover_image' => 'projects/altos-bosque.jpg',
                'gallery_images' => json_encode([
                    'projects/bosque1.jpg'
                ]),
                'featured' => true,
                'sort_order' => 15
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
