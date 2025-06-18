@extends('layouts.app')

@section('content')
    {{-- Hero de equipos --}}
    <section class="relative w-full h-[60vh] overflow-hidden">
        <img src="{{ asset('images/servicios/hero-equipos.jpg') }}" alt="Equipos médico-estéticos"
            class="absolute inset-0 w-full h-full object-cover z-0">
    </section>

    {{-- Sección informativa --}}
    <section class="py-20 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        {{-- Texto --}}
        <div>
            <h2 class="text-2xl md:text-3xl font-semibold uppercase mb-4">¿Qué es la aparatología<br>médico-estética?</h2>
            <p class="text-gray-700 text-sm leading-relaxed">
                Es el conjunto de tecnologías y dispositivos utilizados en tratamientos estéticos no invasivos,
                tanto faciales como corporales. Gracias a la aparatología, se logran resultados visibles y
                duraderos sin necesidad de cirugía ni largos períodos de recuperación.
            </p>
        </div>

        {{-- Imagen --}}
        <div>
            <img src="{{ asset('images/aparatologia-equipo.png') }}" alt="Aparatología médico estética"
                class="w-full rounded-lg shadow-md object-cover">
        </div>
    </section>

    {{-- Tipos de tratamientos --}}
<section class="bg-white py-20 px-6 max-w-6xl mx-auto">
    <h2 class="text-center text-2xl md:text-3xl font-semibold uppercase mb-12">
        Tipos de tratamientos que permiten realizar
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ([
            'Depilación láser',
            'Hifu Facial',
            'Lipoláser Corporal',
            'Radiofrecuencia Facial',
            'Presoterapia Corporal',
            'Criolipólisis Corporal',
            'Láser Yag Facial'
        ] as $tratamiento)
            <div class="bg-white border border-gray-100 p-6 text-center flex flex-col items-center justify-between min-h-[220px]">
                <div>
                    <h3 class="font-semibold text-lg mb-3 text-gray-900">{{ $tratamiento }}</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Ahorro significativo en costes<br>
                        Flexibilidad total de uso<br>
                        Acceso a tecnología avanzada sin compromiso de compra<br>
                        Ideal para testar nuevos tratamientos
                    </p>
                </div>
                <div class="mt-4 w-full h-[3px] bg-[#CBAE67] rounded-full"></div>
            </div>
        @endforeach

        {{-- Caja final personalizada --}}
        <div class="bg-white border border-gray-100 p-6 text-center flex flex-col items-center justify-between min-h-[220px]">
            <div>
                <h3 class="font-semibold text-lg mb-3 text-gray-900">¿Necesitas alguno en especial?</h3>
                <p class="text-sm text-gray-700 leading-relaxed">
                    Si necesitas un tratamiento en particular, escríbenos y te asesoramos personalmente.
                </p>
            </div>
            <a href="{{ route('contacto') }}"
               class="mt-4 inline-block bg-[#CBAE67] hover:bg-[#b89a6d] text-white font-medium px-4 py-2 rounded-full text-sm transition">
                Contáctanos
            </a>
        </div>
    </div>
</section>

@endsection
