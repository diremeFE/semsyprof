@extends('layouts.app')

@section('content')
    <section class="relative w-full h-[90vh] overflow-hidden">
    {{-- Hero Image de Renting y Venta --}}
    <img src="{{ asset('images/servicios/alquiler.png') }}" alt="Renting y Venta"
        class="absolute inset-0 w-full h-full object-cover z-0">
</section>


<section class="py-20 px-6 max-w-6xl mx-auto text-center">
    <h2 class="text-2xl md:text-3xl font-semibold mb-10">
        ¿POR QUÉ ALQUILAR UN EQUIPO<br class="hidden md:block" />
        MÉDICO-ESTÉTICO?
    </h2>

    {{-- Imágenes --}}
    <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-8">
        <img src="{{ asset('images/alquiler1.png') }}" alt="Alquiler equipo 1" class="w-full md:w-1/3 rounded-lg object-cover" />
        <img src="{{ asset('images/alquiler2.png') }}" alt="Alquiler equipo 2" class="w-full md:w-2/3 rounded-lg object-cover" />
    </div>

    {{-- Texto explicativo --}}
    <p class="text-gray-700 text-sm md:text-base leading-relaxed max-w-3xl mx-auto">
        El alquiler es la opción perfecta si quieres ampliar tu carta de servicios sin asumir un gasto elevado ni compromisos a largo plazo.
        Ideal para centros nuevos, promociones puntuales o testear nuevos tratamientos antes de invertir en un equipo propio.
    </p>
</section>


<section class="py-20 bg-white">
    <div class="max-w-md mx-auto text-center mb-12 px-4">
        <h2 class="text-xl md:text-2xl font-semibold tracking-wide text-gray-800">
            ¿CÓMO FUNCIONA EL ALQUILER<br>CON SEMSYPROF?
        </h2>
    </div>

    <div class="max-w-md mx-auto px-4 relative">
        <div class="flex flex-col items-center space-y-16 relative">

            <!-- Paso 1 -->
            <div class="flex flex-col items-center text-center relative">
                <div class="z-10 bg-[#CBAE67] text-white w-9 h-9 rounded-full flex items-center justify-center font-semibold">1</div>
                <p class="text-gray-700 text-sm mt-3 z-10">
                    Eliges el equipo que deseas según tus necesidades
                </p>
                <div class="absolute top-9 h-16 w-px bg-gray-200 z-0"></div>
            </div>

            <!-- Paso 2 -->
            <div class="flex flex-col items-center text-center relative">
                <div class="z-10 bg-[#CBAE67] text-white w-9 h-9 rounded-full flex items-center justify-center font-semibold">2</div>
                <p class="text-gray-700 text-sm mt-3 z-10">
                    Seleccionas el periodo de alquiler (días, semanas o meses)
                </p>
                <div class="absolute top-9 h-16 w-px bg-gray-200 z-0"></div>
            </div>

            <!-- Paso 3 -->
            <div class="flex flex-col items-center text-center relative">
                <div class="z-10 bg-[#CBAE67] text-white w-9 h-9 rounded-full flex items-center justify-center font-semibold">3</div>
                <p class="text-gray-700 text-sm mt-3 z-10">
                    Lo entregamos en tu centro, instalado y listo para usar
                </p>
                <div class="absolute top-9 h-16 w-px bg-gray-200 z-0"></div>
            </div>

            <!-- Paso 4 -->
            <div class="flex flex-col items-center text-center relative">
                <div class="z-10 bg-[#CBAE67] text-white w-9 h-9 rounded-full flex items-center justify-center font-semibold">4</div>
                <p class="text-gray-700 text-sm mt-3 z-10">
                    Incluye formación básica, manuales y protocolos
                </p>
                <div class="absolute top-9 h-16 w-px bg-gray-200 z-0"></div>
            </div>

            <!-- Paso 5 (último, sin línea) -->
            <div class="flex flex-col items-center text-center relative">
                <div class="z-10 bg-[#CBAE67] text-white w-9 h-9 rounded-full flex items-center justify-center font-semibold">5</div>
                <p class="text-gray-700 text-sm mt-3 z-10">
                    Disfrutas del soporte técnico completo durante el periodo de uso
                </p>
            </div>

        </div>
    </div>
</section>


@endsection
