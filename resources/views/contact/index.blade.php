@extends('layouts.app')

@section('title', 'Contacto - INSITU Constructora')
@section('description', 'Contáctanos para cotizar tu proyecto de construcción. Obtén asesoría personalizada y sin costo.')

@section('content')
<section class="relative py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Información de contacto -->
            <div class="space-y-8">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Hablemos de tu proyecto</h1>
                <p class="text-lg text-gray-600">
                    Ya sea una remodelación, un desarrollo residencial o un proyecto comercial,
                    nuestro equipo está listo para asesorarte y acompañarte en cada paso.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary-600 text-white">
                            📍
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Dirección</h3>
                            <p class="text-gray-600">Av. Principal #123, Cancún, Quintana Roo</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary-600 text-white">
                            📧
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Correo</h3>
                            <p><a href="mailto:info@constructora.com" class="text-primary-600 hover:underline">info@constructora.com</a></p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary-600 text-white">
                            📞
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Teléfono</h3>
                            <p><a href="tel:+521234567890" class="text-primary-600 hover:underline">(123) 456-7890</a></p>
                        </div>
                    </div>
                </div>

                <p class="mt-6 text-sm text-gray-500">
                    ⏱ Respondemos en menos de 24 horas. <br>
                    🔒 Tus datos están seguros con nosotros.
                </p>
            </div>

            <!-- Formulario -->
            <div class="bg-white shadow-2xl rounded-2xl p-8 lg:p-10 border border-gray-100">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded bg-green-100 text-green-700 font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Nombre -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre *</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            placeholder="Tu nombre completo"
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">
                        @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            placeholder="ejemplo@correo.com"
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">
                        @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Teléfono -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                            placeholder="+52 ..."
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">
                    </div>

                    <!-- Empresa -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700">Empresa</label>
                        <input type="text" id="company" name="company" value="{{ old('company') }}"
                            placeholder="Opcional"
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">
                    </div>

                    <!-- Tipo de proyecto -->
                    <div>
                        <label for="project_type" class="block text-sm font-medium text-gray-700">Tipo de proyecto</label>
                        <select id="project_type" name="project_type"
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">
                            <option value="">Selecciona una opción</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Industrial">Industrial</option>
                            <option value="Remodelación">Remodelación</option>
                        </select>
                    </div>

                    <!-- Presupuesto -->
                    <div>
                        <label for="budget_range" class="block text-sm font-medium text-gray-700">Rango de presupuesto (MXN)</label>
                        <input type="number" id="budget_range" name="budget_range" value="{{ old('budget_range') }}"
                            placeholder="Ej. 1000000"
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">
                    </div>

                    <!-- Mensaje -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Mensaje *</label>
                        <textarea id="message" name="message" rows="5" required
                            placeholder="Cuéntanos sobre tu proyecto..."
                            class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring-primary-500 focus:border-primary-500">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-secondary-500 text-white px-6 py-3 rounded-lg font-semibold text-lg
                            hover:bg-yellow-400 hover:text-black transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Enviar mensaje</span>
                        <span>🚀</span>
                    </button>


                </form>
            </div>
        </div>
    </div>
</section>
@endsection
