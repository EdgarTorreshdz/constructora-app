<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Páginas estáticas
Route::get('/nosotros', [HomeController::class, 'about'])->name('about');
Route::get('/servicios', [ServiceController::class, 'index'])->name('services');
Route::get('/servicios/{service:slug}', [ServiceController::class, 'show'])->name('services.show');

// Proyectos
Route::get('/proyectos', [ProjectController::class, 'index'])->name('projects');
Route::get('/proyectos/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');

// Testimonios
Route::get('/testimonios', [TestimonialController::class, 'index'])->name('testimonials');

// Contacto
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
