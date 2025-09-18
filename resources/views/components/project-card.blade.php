@props(['project' => null])

@if($project)
<div {{ $attributes->merge(['class' => 'bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-[1.02]']) }}>
    <div class="relative">
        <img
            src="{{ asset('storage/' . $project->cover_image) }}"
            alt="{{ $project->title }}"
            class="w-full h-48 object-cover"
        >
        <div class="absolute top-4 right-4 bg-primary-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
            {{ ucfirst($project->status) }}
        </div>
    </div>

    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $project->title }}</h3>
        <p class="text-gray-600 mb-4">{{ $project->short_description }}</p>

        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ $project->location }}
            </div>

            @if($project->budget)
            <div class="text-sm font-semibold text-primary-600">
                ${{ number_format($project->budget, 0, ',', '.') }}
            </div>
            @endif
        </div>

        <a
            href="{{ route('projects.show', $project->slug) }}"
            class="inline-flex items-center text-primary-600 hover:text-primary-800 font-medium group"
        >
            Ver detalles
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>
</div>
@else
<div class="bg-gray-100 rounded-xl p-8 text-center">
    <p class="text-gray-500">Proyecto no disponible</p>
</div>
@endif
