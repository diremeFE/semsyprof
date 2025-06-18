@extends('layouts.app')

@section('content')
    <section class="py-20 px-6 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <h1 class="text-3xl md:text-5xl font-semibold leading-tight">
                ¿Qué servicios<br>ofrecemos?
            </h1>
            <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                En Semsy Prof Integral Beauty ponemos a tu disposición soluciones completas para que tu
                centro estético, médico o de fisioterapia cuente con la mejor aparatología del mercado
                sin complicaciones.
            </p>
        </div>
    </section>

    <section class="px-6 pb-20 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-6">
            {{-- Card --}}
            @php
                $servicios = [
                    [
                        'title' => 'Equipos méd/estéticos',
                        'desc' => 'Flexibilidad total en el equipamiento ideal adaptado a tu clínica.',
                        'img' => 'serv1.jpg',
                        'route' => 'servicios.equipos',
                    ],
                    [
                        'title' => 'Explotación compartida',
                        'desc' => 'Aparatología de alto nivel sin inversión inicial ni riesgos.',
                        'img' => 'serv2.jpg',
                        'route' => 'servicios.explotacion',
                    ],
                    [
                        'title' => 'Renting y venta',
                        'desc' => 'Logra tus objetivos con libertad y sin grandes desembolsos.',
                        'img' => 'serv3.jpg',
                        'route' => 'servicios.renting',
                    ],
                    [
                        'title' => 'Aparatología estética',
                        'desc' => 'Resultados visibles desde la primera sesión.',
                        'img' => 'serv4.jpg',
                        'route' => 'servicios.aparatologia',
                    ],
                    [
                        'title' => 'Alquiler de equipos',
                        'desc' => 'Elige la aparatología que necesitas por el tiempo que lo necesites.',
                        'img' => 'serv5.jpg',
                        'route' => 'servicios.alquiler',
                    ],
                    [
                        'title' => 'Servicio técnico',
                        'desc' => 'Mantenimiento profesional para tus equipos médicos.',
                        'img' => 'serv6.jpg',
                        'route' => 'servicios.tecnico',
                    ],
                ];
            @endphp

            @foreach ($servicios as $servicio)
                <a href="{{ route($servicio['route']) }}"
                    class="bg-gray-50 rounded-xl overflow-hidden shadow hover:shadow-lg transition relative group">
                    <div class="p-7 relative z-10">
                        <h3 class="text-xl font-semibold mb-2">{{ $servicio['title'] }}</h3>
                        <p class="text-sm text-gray-700">{{ $servicio['desc'] }}</p>
                    </div>
                    <div class="relative h-48">
                        <img src="{{ asset('images/servicios/' . $servicio['img']) }}" alt="{{ $servicio['title'] }}"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-40 transition z-0"></div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
