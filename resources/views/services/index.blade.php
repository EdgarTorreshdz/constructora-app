@extends('layouts.app')

@section('title', 'Servicios - INSITU Constructora')
@section('description', 'Conoce los servicios de construcción que ofrecemos: proyectos residenciales, comerciales e industriales con calidad y compromiso.')

@section('content')
    <!-- Hero Servicios -->
    <section class="relative h-72 flex items-center justify-center text-center bg-white">
        <div class="container mx-auto px-4 z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-secondary-700 mb-4">
                Nuestros Servicios
            </h1>
            <p class="text-xl max-w-2xl mx-auto text-gray-600">
                Soluciones integrales de construcción para hacer realidad tu proyecto.
            </p>
        </div>
    </section>

    <!-- Lista de servicios -->
    <section class="py-0">
      <div class="grid grid-cols-1 md:grid-cols-2">
        @foreach($services as $service)
            <div class="relative group overflow-hidden h-180 cursor-pointer mb-6 md:mb-0">
            <!-- Imagen -->
            <img src="{{ asset('storage/' . $service->image) }}"
                 alt="{{ $service->title }}"
                 class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110" loading="lazy">

            <!-- Overlay oscuro -->
            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

            <!-- Texto centrado -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
              <h3 class="text-2xl font-bold mb-2">{{ $service->title }}</h3>
              <a href="{{ route('services.show', $service->slug) }}"
                 class="opacity-0 group-hover:opacity-100 mt-2 inline-block bg-primary-500 text-secondary-500 font-semibold px-4 py-2 rounded-lg transition">
                Ver más
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    <!-- CTA -->
    <section class="relative py-20 bg-white text-center text-secondary-700">
      <div class="container mx-auto px-4 z-10">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
          ¿Listo para iniciar tu proyecto con nosotros?
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
          En INSITU construimos con visión, innovación y compromiso. Haz realidad tu idea con nosotros.
        </p>
        <a href="{{ route('contact') }}"
           class="bg-primary-500 text-secondary-500 hover:bg-primary-700 px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
          Solicitar Cotización
        </a>
      </div>
    </section>
@endsection
