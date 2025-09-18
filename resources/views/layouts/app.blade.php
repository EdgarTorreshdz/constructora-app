<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Constructora Ejemplo')</title>
    <meta name="description" content="@yield('description', 'Constructora especializada en proyectos residenciales y comerciales de alta calidad')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Constructora Ejemplo')">
    <meta property="og:description" content="@yield('description', 'Constructora especializada en proyectos residenciales y comerciales de alta calidad')">
    <meta property="og:image" content="@yield('image', asset('images/og-image.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Constructora Ejemplo')">
    <meta property="twitter:description" content="@yield('description', 'Constructora especializada en proyectos residenciales y comerciales de alta calidad')">
    <meta property="twitter:image" content="@yield('image', asset('images/og-image.jpg'))">
    @verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ConstructionCompany",
  "name": "INSITU Constructora",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/logo.jpg') }}",
  "description": "Constructora especializada en proyectos residenciales y comerciales en México."
}
</script>
@endverbatim
@vite('resources/js/app.js')
</head>
<body class="font-sans antialiased text-secondary-500 bg-construction-sand">
    <!-- Header -->
<header x-data="{ scrolled: false, open: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
        :class="scrolled ? 'bg-secondary-700/90 shadow-lg' : 'bg-secondary-700'"
        class="fixed top-0 left-0 w-full h-[6.875rem] transition-colors duration-500 z-50">
  <nav class="container mx-auto px-6 flex justify-between items-center h-full">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center space-x-2 h-full">
      <img src="{{ asset('images/logo.jpg') }}" alt="Logo INSITU" class="h-12" loading="lazy">
      <span class="text-2xl font-bold text-white uppercase tracking-wide">INSITU</span>
    </a>

    <!-- Menu Desktop -->
    <ul class="hidden md:flex h-full">
      <li>
        <a href="{{ route('home') }}"
           class="flex items-center h-full px-8 text-white font-semibold uppercase transition
           hover:bg-primary-500 hover:text-black
           {{ request()->routeIs('home') ? 'bg-primary-500 text-black' : '' }}">
          Inicio
        </a>
      </li>
      <li>
        <a href="{{ route('about') }}"
           class="flex items-center h-full px-8 text-white font-semibold uppercase transition
           hover:bg-primary-500 hover:text-black
           {{ request()->routeIs('about') ? 'bg-primary-500 text-black' : '' }}">
          Nosotros
        </a>
      </li>
      <li>
        <a href="{{ route('services') }}"
           class="flex items-center h-full px-8 text-white font-semibold uppercase transition
           hover:bg-primary-500 hover:text-black
           {{ request()->routeIs('services') ? 'bg-primary-500 text-black' : '' }}">
          Servicios
        </a>
      </li>
      <li>
        <a href="{{ route('projects') }}"
           class="flex items-center h-full px-8 text-white font-semibold uppercase transition
           hover:bg-primary-500 hover:text-black
           {{ request()->routeIs('projects') ? 'bg-primary-500 text-black' : '' }}">
          Proyectos
        </a>
      </li>
      <li>
        <a href="{{ route('contact') }}"
           class="flex items-center h-full px-8 text-white font-semibold uppercase transition
           hover:bg-primary-500 hover:text-black
           {{ request()->routeIs('contact') ? 'bg-primary-500 text-black' : '' }}">
          Contacto
        </a>
      </li>
    </ul>

    <!-- Hamburguesa para mobile (igual que antes) -->
    <button @click="open = !open" class="md:hidden text-white focus:outline-none z-50 relative">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
       viewBox="0 0 24 24" stroke="currentColor">
    <!-- Ícono hamburguesa -->
    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
    <!-- Ícono X -->
    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12" />
  </svg>
</button>
</nav>

<!-- Menu Mobile -->
<div class="fixed inset-0 bg-secondary-700 text-white flex flex-col items-center justify-center space-y-6 z-40 md:hidden"
     x-show="open"
     x-transition>
  <ul class="text-center space-y-6 text-2xl font-semibold uppercase">
    <li><a href="{{ route('home') }}" class="block px-4 py-2 hover:text-primary-500">Inicio</a></li>
    <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-primary-500">Nosotros</a></li>
    <li><a href="{{ route('services') }}" class="block px-4 py-2 hover:text-primary-500">Servicios</a></li>
    <li><a href="{{ route('projects') }}" class="block px-4 py-2 hover:text-primary-500">Proyectos</a></li>
    <li><a href="{{ route('contact') }}" class="block px-4 py-2 hover:text-primary-500">Contacto</a></li>
  </ul>
</div>

  </nav>
</header>

<!-- Spacer para que el contenido no quede debajo del menú -->
<div class="h-[6.875rem]"></div>

    <!-- Main -->
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="bg-secondary-700 text-gray-300 pt-16 pb-8 relative">
  <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-4 gap-12">

    <!-- Logo & descripción -->
    <div>
      <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-4">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo INSITU" class="h-12" loading="lazy">
        <span class="text-2xl font-bold text-white uppercase tracking-wide">INSITU</span>
      </a>
      <p class="text-sm leading-relaxed">
        Construimos con visión, calidad e innovación. Más de 25 años creando proyectos que transforman espacios en experiencias.
      </p>
    </div>

    <!-- Enlaces rápidos -->
    <div>
      <h4 class="text-white font-semibold text-lg mb-4">Enlaces rápidos</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('home') }}" class="hover:text-primary-500 transition">Inicio</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-primary-500 transition">Nosotros</a></li>
        <li><a href="{{ route('services') }}" class="hover:text-primary-500 transition">Servicios</a></li>
        <li><a href="{{ route('projects') }}" class="hover:text-primary-500 transition">Proyectos</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-primary-500 transition">Contacto</a></li>
      </ul>
    </div>

    <!-- Servicios destacados -->
    <div>
      <h4 class="text-white font-semibold text-lg mb-4">Servicios</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-primary-500 transition">Construcción Residencial</a></li>
        <li><a href="#" class="hover:text-primary-500 transition">Proyectos Comerciales</a></li>
        <li><a href="#" class="hover:text-primary-500 transition">Remodelaciones</a></li>
        <li><a href="#" class="hover:text-primary-500 transition">Diseño Arquitectónico</a></li>
      </ul>
    </div>

    <!-- Contacto & redes -->
    <div>
      <h4 class="text-white font-semibold text-lg mb-4">Contacto</h4>
      <ul class="text-sm space-y-2">
        <li>📍 Av. Principal #123, Cancún, Q. Roo</li>
        <li>📧 <a href="mailto:contacto@insitu.com" class="hover:text-primary-500">contacto@insitu.com</a></li>
        <li>📞 <a href="tel:+521234567890" class="hover:text-primary-500">(123) 456-7890</a></li>
      </ul>

<div class="flex space-x-4 mt-4">
  <!-- Facebook -->
  <a href="#" class="hover:text-primary-500 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
      <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657
        9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506
        1.492-3.89 3.777-3.89 1.094 0 2.238.195
        2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63
        1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343
        21.128 22 16.991 22 12z"/>
    </svg>
  </a>

  <!-- Twitter -->
  <a href="#" class="hover:text-primary-500 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
      <path d="M23 3a10.9 10.9 0 01-3.14
        1.53A4.48 4.48 0 0022.4.36a9.09 9.09 0
        01-2.88 1.1A4.52 4.52 0 0016.11
        0c-2.63 0-4.76 2.13-4.76
        4.76 0 .37.04.73.12 1.07A12.94
        12.94 0 013 1.64a4.77 4.77 0
        00-.64 2.4c0 1.66.84 3.13 2.12
        3.99a4.49 4.49 0 01-2.16-.6v.06c0
        2.32 1.65 4.25 3.84 4.69a4.44
        4.44 0 01-2.15.08c.61 1.91
        2.39 3.3 4.5 3.34A9.05 9.05
        0 012 19.54 12.8 12.8 0
        008.29 21c7.55 0 11.68-6.15
        11.68-11.48 0-.17 0-.35-.01-.52A8.18
        8.18 0 0023 3z"/>
    </svg>
  </a>

  <!-- LinkedIn -->
  <a href="#" class="hover:text-primary-500 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
      <path d="M19 0h-14c-2.76 0-5
        2.24-5 5v14c0 2.76 2.24 5
        5 5h14c2.76 0 5-2.24
        5-5v-14c0-2.76-2.24-5-5-5zm-11
        19h-3v-10h3v10zm-1.5-11.3c-.97
        0-1.75-.79-1.75-1.75s.78-1.75
        1.75-1.75 1.75.79
        1.75 1.75-.78 1.75-1.75
        1.75zm13.5 11.3h-3v-5.6c0-1.34-.03-3.06-1.87-3.06-1.87
        0-2.16 1.46-2.16 2.96v5.7h-3v-10h2.88v1.36h.04c.4-.75
        1.38-1.54 2.84-1.54 3.04 0 3.6 2
        3.6 4.6v5.6z"/>
    </svg>
  </a>

  <!-- Instagram -->
  <a href="#" class="hover:text-primary-500 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2.2c3.2 0 3.584.012
        4.85.07 1.17.054 1.97.24
        2.43.403a4.92 4.92 0 011.77
        1.15 4.92 4.92 0 011.15 1.77c.163.46.35
        1.26.403 2.43.058 1.266.07
        1.65.07 4.85s-.012 3.584-.07
        4.85c-.054 1.17-.24 1.97-.403
        2.43a4.92 4.92 0 01-1.15
        1.77 4.92 4.92 0 01-1.77
        1.15c-.46.163-1.26.35-2.43.403-1.266.058-1.65.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.054-1.97-.24-2.43-.403a4.92
        4.92 0 01-1.77-1.15 4.92 4.92
        0 01-1.15-1.77c-.163-.46-.35-1.26-.403-2.43C2.212
        15.784 2.2 15.4 2.2
        12s.012-3.584.07-4.85c.054-1.17.24-1.97.403-2.43a4.92
        4.92 0 011.15-1.77 4.92 4.92
        0 011.77-1.15c.46-.163 1.26-.35
        2.43-.403C8.416 2.212 8.8 2.2
        12 2.2zm0 1.8c-3.15
        0-3.517.012-4.75.07-.96.044-1.48.2-1.82.332-.46.178-.79.39-1.14.74-.35.35-.562.68-.74
        1.14-.132.34-.288.86-.332
        1.82-.058 1.233-.07 1.6-.07
        4.75s.012 3.517.07
        4.75c.044.96.2 1.48.332
        1.82.178.46.39.79.74
        1.14.35.35.68.562 1.14.74.34.132.86.288
        1.82.332 1.233.058 1.6.07
        4.75.07s3.517-.012 4.75-.07c.96-.044
        1.48-.2 1.82-.332.46-.178.79-.39
        1.14-.74.35-.35.562-.68.74-1.14.132-.34.288-.86.332-1.82.058-1.233.07-1.6.07-4.75s-.012-3.517-.07-4.75c-.044-.96-.2-1.48-.332-1.82a3.12
        3.12 0 00-.74-1.14 3.12 3.12 0 00-1.14-.74c-.34-.132-.86-.288-1.82-.332-1.233-.058-1.6-.07-4.75-.07zm0
        3.3a6.5 6.5 0 110 13 6.5 6.5
        0 010-13zm0 2.2a4.3 4.3 0 100
        8.6 4.3 4.3 0 000-8.6zm5.2-2.9a1.5 1.5
        0 110 3 1.5 1.5 0 010-3z"/>
    </svg>
  </a>
</div>
    </div>
  </div>

  <!-- Línea final -->
  <div class="border-t border-gray-600 mt-12 pt-6 text-center text-sm text-gray-400">
    <p>&copy; {{ date('Y') }} INSITU. Todos los derechos reservados. | Diseñado con ❤️ en México</p>
  </div>
</footer>

</body>

</html>
