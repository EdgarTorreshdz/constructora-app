@extends('layouts.app')

@section('title', 'Proyectos - INSITU Constructora')
@section('description', 'Explora nuestros proyectos destacados: residenciales, comerciales e industriales que reflejan calidad y compromiso.')

@section('content')
    <!-- Hero Proyectos -->
    <section class="relative h-72 flex items-center justify-center text-center text-white">
        <div class="absolute inset-0">
            <img src="{{ asset('images/projects-hero.jpg') }}"
                 alt="Proyectos de construcción"
                 class="w-full h-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Nuestros Proyectos</h1>
            <p class="text-lg max-w-2xl mx-auto">Innovación, experiencia y calidad en cada construcción.</p>
        </div>
    </section>

    <!-- Listado de proyectos -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">

    @if($projects->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($projects as $project)
          <a href="{{ route('projects.show', $project->slug) }}" class="block">
  <div class="relative group overflow-hidden rounded-xl shadow-md">
    <!-- Imagen -->
    <img src="{{ asset('storage/' . $project->cover_image) }}"
         alt="{{ $project->title }}"
         class="w-full h-80 object-cover transform transition duration-700 group-hover:scale-110" loading="lazy">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

    <!-- Contenido -->
    <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
      <h3 class="text-2xl font-bold">{{ $project->title }}</h3>
      <p class="text-sm text-gray-200">{{ $project->short_description }}</p>
      <span class="mt-3 inline-block bg-primary-500 text-secondary-700 px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transition">
        Ver más →
      </span>
    </div>
  </div>
</a>

        @endforeach
      </div>
    {{ $projects->links() }}

    @else
      <div class="text-center py-12">
        <p class="text-gray-600 text-lg">Próximamente publicaremos nuestros proyectos.</p>
      </div>
    @endif
  </div>

</section>


    <!-- CTA -->
<!-- CTA -->
<section class="relative py-20 bg-secondary-700 text-center text-white">
  <div class="absolute inset-0">
    <img src="{{ asset('images/cta-bg.jpg') }}"
         alt="Construcción"
         class="w-full h-full object-cover opacity-20" loading="lazy">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <div class="relative container mx-auto px-4 z-10">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
      ¿Quieres que tu proyecto sea el próximo?
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Contáctanos y descubre cómo podemos hacer realidad tu visión con excelencia y compromiso.
    </p>
    <a href="{{ route('contact') }}"
       class="bg-primary-500 text-secondary-700 hover:bg-primary-700 hover:text-white px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
      Solicitar Cotización
    </a>
  </div>
</section>

@endsection
