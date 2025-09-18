@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Paginación de proyectos" class="flex items-center justify-center mt-8 space-x-2">

        {{-- Botón Anterior --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-gray-400 bg-gray-200 rounded cursor-not-allowed">
                Anterior
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
               class="px-4 py-2 bg-secondary-700 text-white rounded hover:bg-primary-500 hover:text-black transition">
                Anterior
            </a>
        @endif

        {{-- Números de página --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-400">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 bg-primary-500 text-secondary-700 font-bold rounded">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 bg-white text-secondary-700 border border-gray-300 rounded hover:bg-primary-500 hover:text-black transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botón Siguiente --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
               class="px-4 py-2 bg-secondary-700 text-white rounded hover:bg-primary-500 hover:text-black transition">
                Siguiente
            </a>
        @else
            <span class="px-4 py-2 text-gray-400 bg-gray-200 rounded cursor-not-allowed">
                Siguiente
            </span>
        @endif
    </nav>
@endif
