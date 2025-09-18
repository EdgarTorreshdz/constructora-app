@extends('layouts.app')

@section('title', $service->title . ' - INSITU Constructora')
@section('description', $service->short_description)

@section('content')
    <!-- Hero -->
    <section class="relative h-72 flex items-center justify-center text-center text-white">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $service->image) }}"
                 alt="{{ $service->title }}"
                 class="w-full h-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $service->title }}</h1>
            <p class="text-xl md:text-2xl font-medium max-w-3xl mx-auto">{{ $service->short_description }}</p>
        </div>
    </section>

    <!-- Detalle del servicio -->
    <!-- Detalle del servicio -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12 max-w-5xl">
            <div class="text-center">
                <p class="text-xl md:text-2xl lg:text-3xl text-gray-700 leading-relaxed max-w-4xl mx-auto">
                    {{ $service->description }}
                </p>
            </div>


            <div class="mt-10 text-center">
                <a href="{{ route('contact') }}"
                class="inline-block bg-primary-500 text-secondary-700 hover:bg-primary-700 hover:text-white px-8 py-3 rounded-lg font-semibold shadow-md transition duration-300">
                Solicitar Cotización
                </a>
            </div>
        </div>
    </section>


    <!-- Otros servicios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-700 text-center mb-10">
                Otros Servicios
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach(\App\Models\Service::where('id', '!=', $service->id)->take(2)->get() as $other)
                    <a href="{{ route('services.show', $other->slug) }}"
                       class="relative group overflow-hidden h-64 rounded-xl shadow-lg cursor-pointer">
                        <img src="{{ asset('storage/' . $other->image) }}"
                             alt="{{ $other->title }}"
                             class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4">
                            <h3 class="text-2xl font-bold">{{ $other->title }}</h3>
                            <p class="text-sm">{{ $other->short_description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
