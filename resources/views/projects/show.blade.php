@extends('layouts.app')

@section('title', $project->title . ' - INSITU Constructora')
@section('description', $project->short_description)

@section('content')
    <!-- Hero del Proyecto -->
    <section class="relative h-72 flex items-center justify-center text-center text-white">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $project->cover_image) }}"
                 alt="{{ $project->title }}"
                 class="w-full h-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $project->title }}</h1>
            <p class="text-lg max-w-2xl mx-auto">{{ $project->short_description }}</p>
        </div>
    </section>

    <!-- Detalle del Proyecto -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12 max-w-5xl space-y-10">
            <!-- Descripción -->
            <div class="text-center">
                <p class="text-lg md:text-xl lg:text-2xl text-gray-700 leading-relaxed max-w-4xl mx-auto">
                    {{ $project->description }}
                </p>
            </div>

            <!-- Información -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700">
                <div>
                    <h3 class="text-xl font-semibold mb-2 text-secondary-500">Ubicación</h3>
                    <p>{{ $project->location }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2 text-secondary-500">Presupuesto</h3>
                    <p>${{ number_format($project->budget, 2) }} MXN</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2 text-secondary-500">Inicio</h3>
                    <p>{{ \Carbon\Carbon::parse($project->start_date)->format('d/m/Y') }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2 text-secondary-500">Entrega</h3>
                    <p>
                        @if($project->end_date)
                            {{ \Carbon\Carbon::parse($project->end_date)->format('d/m/Y') }}
                        @else
                            En progreso
                        @endif
                    </p>
                </div>
            </div>

            <!-- Galería -->
            <!-- Galería -->
            @if($project->gallery_images)
                <div>
                    <h3 class="text-2xl font-bold text-secondary-500 text-center mb-6">Galería</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach(json_decode($project->gallery_images) as $image)
                            <a href="{{ asset('storage/' . $image) }}"
                            class="glightbox overflow-hidden rounded-lg shadow-md"
                            data-gallery="project-{{ $project->id }}">
                                <img src="{{ asset('storage/' . $image) }}"
                                    alt="Imagen de {{ $project->title }}"
                                    class="w-full h-64 object-cover transform transition duration-500 hover:scale-110"
                                    loading="lazy">
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif


            <!-- Botón Cotización -->
            <div class="text-center mt-12">
                <a href="{{ route('contact') }}"
                   class="inline-block bg-primary-500 text-secondary-700 hover:bg-primary-700 hover:text-white px-8 py-3 rounded-lg font-semibold shadow-md transition duration-300">
                    Solicitar Cotización
                </a>
            </div>
        </div>
    </section>
@endsection
