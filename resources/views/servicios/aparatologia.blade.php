@extends('layouts.app')

@section('content')
    <section class="relative w-full h-[90vh] overflow-hidden">
    {{-- Hero Image de Renting y Venta --}}
    <img src="{{ asset('images/servicios/aparatologia.png') }}" alt="Renting y Venta"
        class="absolute inset-0 w-full h-full object-cover z-0">
</section>

<section class="py-20 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        {{-- Texto --}}
        <div class="text-center md:text-left">
            <h2 class="text-xl md:text-2xl font-semibold uppercase mb-4 leading-snug">
                ¿QUÉ ES LA APARATOLOGÍA ESTÉTICA?
            </h2>
            <p class="text-gray-700 text-sm leading-relaxed max-w-md mx-auto md:mx-0">
                Es el conjunto de tecnologías y dispositivos utilizados en tratamientos estéticos no invasivos, tanto faciales como corporales. Gracias a la aparatología, se logran resultados visibles y duraderos sin necesidad de cirugía ni largos periodos de recuperación.            </p>
        </div>

        {{-- Imagen --}}
        <div>
            <img src="{{ asset('images/servicios/renting-venta-bloque1.jpg') }}" alt="Venta directa"
                class="rounded-xl w-full object-cover">
        </div>
    </div>
</section>


<section class="py-20 px-6 max-w-6xl mx-auto">
    <h2 class="text-2xl md:text-3xl font-semibold text-center mb-12 uppercase tracking-wide leading-tight">
        Ventajas de trabajar con<br class="hidden md:block" />
        aparatología estética
    </h2>

    <div class="grid md:grid-cols-2 gap-12 items-center">
        {{-- Imagen --}}
        <div>
            <img src="{{ asset('images/aparatologia-ventajas.png') }}" alt="Ventajas Aparatología"
                class="rounded-xl w-full object-cover">
        </div>

        {{-- Lista numerada con fondo gris claro --}}
        <div class="space-y-4">
            @php
                $ventajas = [
                    'Resultados visibles desde la primera sesión',
                    'Tratamientos indoloros y sin baja médica',
                    'Alta demanda entre los clientes',
                    'Rentabilidad rápida y fidelización de clientes',
                    'Valor añadido para tu centro',
                ];
            @endphp

            @foreach ($ventajas as $i => $text)
                <div class="flex items-center bg-gray-50 rounded px-4 py-3 shadow-sm">
                    <div class="w-7 h-7 flex items-center justify-center rounded-full bg-[#CBAE67] text-white text-sm font-bold mr-4">
                        {{ $i + 1 }}
                    </div>
                    <p class="text-sm text-gray-800 leading-snug">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="py-20 px-4 max-w-6xl mx-auto text-center">
    {{-- Título y subrayado --}}
    <div class="inline-block relative mb-10">
        {{-- Primera línea con subrayado --}}
        <div class="relative inline-block">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 relative z-10">
                ¿A QUIÉN VA DIRIGIDA
            </h2>

            {{-- Subrayado dorado SVG --}}
            <svg class="absolute left-1/2 top-full -translate-x-1/2 mt-1 w-[220px] md:w-[270px] h-[10px] z-0" viewBox="0 0 300 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 5C50 10 250 10 300 5" stroke="#CBAE67" stroke-width="8" stroke-linecap="round"/>
            </svg>
        </div>

        {{-- Segunda línea del título --}}
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 mt-6">NUESTRA APARATOLOGÍA?</h2>
    </div>

    {{-- Botón --}}
    <div class="mt-4 mb-12">
        <button class="px-6 py-2 border border-black text-sm rounded-full hover:bg-black hover:text-white transition">
            Explorar ahora
        </button>
    </div>

    {{-- Grid de destinatarios --}}
    <div class="grid grid-cols-5 gap-4 justify-center items-center">
        {{-- Fila 1 --}}
        <div class="col-span-1 h-[110px] bg-gray-50 rounded-xl flex flex-col items-center justify-center text-sm shadow">
            <img src="{{ asset('images/icons/centros.svg') }}" alt="Centro" class="w-6 h-6 mb-2">
            Centros de estética
        </div>

        <div class="col-span-2 h-[140px] bg-gray-50 rounded-xl flex flex-col items-center justify-center font-semibold text-center text-sm shadow">
            <img src="{{ asset('images/icons/clinica.svg') }}" alt="Clínica" class="w-8 h-8 mb-2">
            Clínicas de medicina estética
        </div>

        <div class="col-span-1 h-[110px] bg-gray-50 rounded-xl flex flex-col items-center justify-center text-sm shadow">
            <img src="{{ asset('images/icons/autonomas.svg') }}" alt="Autónomas" class="w-6 h-6 mb-2">
            Esteticistas autónomas
        </div>

        {{-- Fila 2 --}}
        <div class="col-span-1 h-[100px] bg-gray-50 rounded-xl flex flex-col items-center justify-center text-sm shadow">
            <img src="{{ asset('images/icons/formacion.svg') }}" alt="Formación" class="w-6 h-6 mb-2">
            Centros de formación estética
        </div>

        <div class="col-span-4 h-[100px] bg-gray-50 rounded-xl flex flex-col items-center justify-center text-sm text-center shadow">
            <img src="{{ asset('images/icons/profesionales.svg') }}" alt="Domicilio" class="w-6 h-6 mb-2">
            Profesionales a domicilio o en cabina compartida
        </div>
    </div>
</section>






<script>
    document.addEventListener("DOMContentLoaded", () => {
        const svg = document.getElementById("subrayado-svg");
        const titulo = document.getElementById("subrayado-titulo");

        const ajustarSubrayado = () => {
            const ancho = titulo.offsetWidth;
            svg.setAttribute("width", ancho);
        };

        ajustarSubrayado();
        window.addEventListener("resize", ajustarSubrayado);
    });
</script>


@endsection
