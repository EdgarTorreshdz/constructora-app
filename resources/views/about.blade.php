@extends('layouts.app')

@section('title', 'Nosotros - INSITU Constructora')
@section('description', 'Conoce la historia, misión y valores de INSITU Constructora. Más de 25 años construyendo proyectos residenciales y comerciales con calidad, innovación y compromiso.')

@section('content')

<!-- Hero -->
<section class="relative h-[60vh] flex items-center justify-center">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1500&q=80"
             alt="Construcción INSITU"
             class="w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-bold">Sobre Nosotros</h1>
        <p class="mt-4 text-xl max-w-2xl mx-auto">Más de 25 años construyendo proyectos que transforman espacios en experiencias.</p>
    </div>
</section>

<!-- Historia -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <div>
        <img src="{{ asset('images/equipo.jpg') }}" alt="Equipo INSITU"
             class="rounded-lg shadow-md w-full h-[400px] object-cover" loading="lazy">
    </div>
    <div>
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Nuestra Historia</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Fundada en 1998, INSITU Constructora ha liderado proyectos residenciales, corporativos y comerciales en toda la República Mexicana.
        Con un equipo de expertos, hemos transformado ideas en realidades que destacan por su calidad, innovación y diseño arquitectónico.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Hoy seguimos creciendo, manteniendo el compromiso con nuestros clientes y ofreciendo soluciones integrales que garantizan confianza y satisfacción.
      </p>
    </div>
  </div>
</section>

<!-- Misión, Visión, Valores -->
<section class="py-16">
  <div class="container mx-auto px-6 text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold">Nuestra Esencia</h2>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">La base de nuestro éxito está en los principios que guían cada proyecto que realizamos.</p>
  </div>
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-primary-600 mb-4">Misión</h3>
      <p class="text-gray-700">Brindar soluciones de construcción que superen las expectativas de nuestros clientes, garantizando calidad, seguridad y cumplimiento en cada proyecto.</p>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-primary-600 mb-4">Visión</h3>
      <p class="text-gray-700">Ser reconocidos como una de las constructoras líderes en México, destacando por la innovación, sostenibilidad y excelencia en nuestros proyectos.</p>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-primary-600 mb-4">Valores</h3>
      <ul class="text-gray-700 space-y-2 text-left">
        <li>✔ Compromiso con el cliente</li>
        <li>✔ Innovación constante</li>
        <li>✔ Trabajo en equipo</li>
        <li>✔ Calidad y seguridad</li>
        <li>✔ Responsabilidad social</li>
      </ul>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="relative py-20 bg-secondary-500 text-center text-white">
    <!-- Imagen de fondo -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80"
             alt="Construcción"
             class="w-full h-full object-cover" loading="lazy">
        <!-- Overlay oscuro encima de la imagen -->
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Contenido -->
    <div class="relative container mx-auto px-4 z-10">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            ¿Quieres construir con nosotros?
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            En INSITU estamos listos para hacer realidad tu próximo proyecto.
        </p>
        <a href="{{ route('contact') }}"
           class="bg-primary-500 text-secondary-500 hover:bg-primary-700 px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
           Solicitar Cotización
        </a>
    </div>
</section>


@endsection
