@extends('layouts.app')

@section('title', 'INSITU Constructora - Construcción de Calidad')
@section('description', 'Constructora especializada en proyectos residenciales y comerciales. Calidad, innovación y compromiso en cada proyecto.')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="bg-[url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80')] bg-cover bg-center absolute inset-0"></div>

        <div class="container mx-auto px-4 z-10 text-white text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Construimos tus <span class="text-primary-400">sueños</span></h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Más de 25 años creando espacios excepcionales con calidad, innovación y compromiso.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('projects') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">Nuestros Proyectos</a>
                <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-gray-800 px-8 py-3 rounded-lg font-semibold transition duration-300">Contactarnos</a>
            </div>
        </div>
    </section>

<section class="py-16 bg-primary-700 text-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

      <div x-data="counter(25)">
        <div x-text="count + '+'" class="text-4xl md:text-5xl font-bold mb-2"></div>
        <div class="text-lg">Años de Experiencia</div>
      </div>

      <div x-data="counter(150)">
        <div x-text="count + '+'" class="text-4xl md:text-5xl font-bold mb-2"></div>
        <div class="text-lg">Proyectos Completados</div>
      </div>

      <div x-data="counter(50)">
        <div x-text="count + '+'" class="text-4xl md:text-5xl font-bold mb-2"></div>
        <div class="text-lg">Clientes Satisfechos</div>
      </div>

      <div x-data="counter(12)">
        <div x-text="count" class="text-4xl md:text-5xl font-bold mb-2"></div>
        <div class="text-lg">Premios Obtenidos</div>
      </div>

    </div>
  </div>
</section>


    <!-- Testimonials -->
    <!-- Featured Projects -->
<!-- Featured Projects estilo "cuadrados grandes" -->
<section class="py-0 pb-20">
    <div class="text-center mb-12 pt-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Proyectos Destacados</h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        Innovación y calidad en cada uno de nuestros trabajos.
      </p>
    </div>

  <div class="grid grid-cols-1 md:grid-cols-2 mx-auto w-11/12 max-w-9xl">

    @foreach($featuredProjects as $project)
  <div class="relative group overflow-hidden h-180 cursor-pointer mb-6 md:mb-0">
        <!-- Imagen -->
        <img src="{{ asset('storage/' . $project->cover_image) }}"
             alt="{{ $project->title }}"
             class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"
             loading="lazy">

        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

        <!-- Texto centrado -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
          <h3 class="text-2xl font-bold mb-2">{{ $project->title }}</h3>
          <p class="text-sm max-w-md text-gray-200 mb-4">{{ $project->short_description }}</p>
          <a href="{{ route('projects.show', $project->slug) }}"
            class="block md:opacity-0 group-hover:opacity-100 mt-2 inline-block bg-primary-500 text-secondary-500 font-semibold px-4 py-2 rounded-lg transition">
            Ver más →
            </a>
        </div>
      </div>
    @endforeach
  </div>
</section>



    <!-- CTA Section -->
    <section class="relative py-20 bg-secondary-500 text-center text-white">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80"
                alt="Construcción" class="w-full h-full object-cover opacity-30" loading="lazy">
        </div>
        <div class="relative container mx-auto px-4 z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6">¿Listo para comenzar tu proyecto?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Contáctanos hoy mismo para una consulta gratuita y descubre cómo podemos hacer realidad tu visión.</p>
            <a href="{{ route('contact') }}"
            class="bg-primary-500 text-secondary-500 hover:bg-primary-700 px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
            Solicitar Cotización
            </a>
        </div>
    </section>

    <section class="relative py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-12 max-w-5xl">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-secondary-500 mb-4">
        Constructora en Cancún y Quintana Roo
      </h2>
      <div class="w-24 h-1 bg-primary-500 mx-auto rounded"></div>
    </div>

    <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
      <p>
        En <strong class="text-secondary-500">INSITU Constructora</strong> somos especialistas en el desarrollo de
        <strong>proyectos residenciales, comerciales y corporativos en Cancún y la Riviera Maya</strong>.
        Con más de 25 años de experiencia, hemos consolidado nuestra reputación gracias a la calidad, innovación
        y compromiso en cada obra que entregamos.
      </p>

      <p>
        Nuestro equipo multidisciplinario de arquitectos, ingenieros y diseñadores trabaja de la mano con nuestros clientes
        para crear espacios únicos que cumplen con los más altos estándares de construcción. Realizamos
        <strong>casas, edificios, desarrollos habitacionales, oficinas y remodelaciones</strong>, siempre con atención
        al detalle y un enfoque sostenible.
      </p>

      <p>
        Si buscas una <strong>constructora en Cancún, Playa del Carmen, Tulum o cualquier parte de Quintana Roo</strong>,
        en INSITU encontrarás un aliado confiable que hará realidad tu proyecto, optimizando tiempos, costos y garantizando
        resultados duraderos.
      </p>
    </div>

    <div class="text-center mt-10">
      <a href="{{ route('contact') }}"
         class="inline-block bg-primary-500 text-secondary-500 hover:bg-primary-700 px-8 py-3 rounded-lg font-semibold shadow-md transition duration-300">
         Solicita una cotización
      </a>
    </div>
  </div>
</section>

@endsection
