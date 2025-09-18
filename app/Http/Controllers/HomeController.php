<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        // Obtener proyectos destacados
        $featuredProjects = Project::where('featured', true)
                                  ->orderBy('sort_order', 'asc')
                                  ->limit(4)
                                  ->get();

        // Obtener todos los servicios
        $services = Service::orderBy('sort_order', 'asc')->get();

        // Obtener testimonios
        $testimonials = Testimonial::where('approved', true)
                                  ->orderBy('created_at', 'desc')
                                  ->limit(3)
                                  ->get();

        return view('home', compact('featuredProjects', 'services', 'testimonials'));
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('about');
    }
}
