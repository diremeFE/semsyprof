@extends('layouts.app')

@section('content')
    <section class="relative w-full h-[90vh] overflow-hidden">
    {{-- Hero Image de Renting y Venta --}}
    <img src="{{ asset('images/servicios/renting-venta-hero.png') }}" alt="Renting y Venta"
        class="absolute inset-0 w-full h-full object-cover z-0">
</section>

<section class="py-20 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        {{-- Texto --}}
        <div class="text-center md:text-left">
            <h2 class="text-xl md:text-2xl font-semibold uppercase mb-4 leading-snug">
                Venta directa: hazte con<br class="hidden md:block"> tu equipo propio
            </h2>
            <p class="text-gray-700 text-sm leading-relaxed max-w-md mx-auto md:mx-0">
                Si tienes claro el equipo que quieres y buscas estabilidad a largo plazo, puedes adquirirlo directamente con nosotros. Todos nuestros equipos cuentan con garantía, soporte técnico y posibilidad de formación inicial.
            </p>
        </div>

        {{-- Imagen --}}
        <div>
            <img src="{{ asset('images/servicios/renting-venta-bloque1.jpg') }}" alt="Venta directa"
                class="rounded-xl w-full object-cover">
        </div>
    </div>
</section>


<section class="bg-[#CBAE67] py-14 px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-semibold uppercase mb-2">¿No sabes qué te conviene más?</h2>
    <p class="text-sm md:text-base text-black max-w-2xl mx-auto">
        Te asesoramos sin compromiso. Analizamos tu tipo de negocio, volumen de clientela, frecuencia de uso
        y presupuesto para ofrecerte la mejor opción: renting o compra.
    </p>
</section>



<section class="py-20 px-6 text-center max-w-4xl mx-auto">
    <h2 class="text-2xl md:text-3xl font-semibold uppercase mb-12">
        ¿Qué equipos puedes adquirir o rentar?
    </h2>

    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-12 text-left max-w-md mx-auto text-sm">
        @foreach ([
            'Criolipólisis',
            'Presoterapia',
            'Radiofrecuencia',
            'Cavitación',
            'IPL facial y corporal',
            'HIFU',
            'Oxigenoterapia',
            'Láser de depilación'
        ] as $item)
            <li class="flex items-center justify-between border-b border-gray-200 py-2">
                <span class="uppercase tracking-wide text-xs text-gray-800">{{ $item }}</span>
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </li>
        @endforeach
    </ul>
</section>


@endsection
