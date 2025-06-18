<style>
    @keyframes scrollMarquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        animation: scrollMarquee 10s linear infinite;
    }
</style>

@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative w-full h-[90vh] overflow-hidden">
        <img src="{{ asset('images/hero-inicio.png') }}" alt="Tecnología estética"
            class="absolute inset-0 w-full h-full object-cover z-0">
    </section>

    {{-- Beneficios Section --}}
    <section class="py-16 px-6 max-w-6xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-semibold mb-6 leading-tight">
            Impulsa tu centro con tecnología<br class="hidden md:block">
            estética de última generación
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            En Semsy Prof combinamos innovación, flexibilidad y acompañamiento profesional<br>
            para que puedas centrarte en lo que de verdad importa: tus clientes.<br>
            Te ayudamos a crecer con soluciones reales y sin complicaciones.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
            {{-- Item 1 --}}
            <div class="bg-gray-50 p-6 rounded shadow-sm flex space-x-4 items-start">
                <img src="{{ asset('images/icons/inversion.svg') }}" alt="Sin inversión" class="w-8 h-8 text-gold">
                <div>
                    <h3 class="font-bold mb-1">Sin inversión inicial</h3>
                    <p class="text-sm text-gray-600">Empieza a trabajar desde el primer día sin comprar maquinaria.</p>
                </div>
            </div>

            {{-- Item 2 --}}
            <div class="bg-gray-50 p-6 rounded shadow-sm flex space-x-4 items-start">
                <img src="{{ asset('images/icons/formacion.svg') }}" alt="Formación" class="w-8 h-8 text-gold">
                <div>
                    <h3 class="font-bold mb-1">Formación incluida</h3>
                    <p class="text-sm text-gray-600">Te enseñamos a usar cada equipo con seguridad y confianza.</p>
                </div>
            </div>

            {{-- Item 3 --}}
            <div class="bg-gray-50 p-6 rounded shadow-sm flex space-x-4 items-start">
                <img src="{{ asset('images/icons/tecnico.svg') }}" alt="Técnico" class="w-8 h-8 text-gold">
                <div>
                    <h3 class="font-bold mb-1">Servicio técnico propio</h3>
                    <p class="text-sm text-gray-600">Reparamos y damos soporte con rapidez y profesionalidad.</p>
                </div>
            </div>

            {{-- Item 4 --}}
            <div class="bg-gray-50 p-6 rounded shadow-sm flex space-x-4 items-start">
                <img src="{{ asset('images/icons/flexibilidad.svg') }}" alt="Flexibilidad" class="w-8 h-8 text-gold">
                <div>
                    <h3 class="font-bold mb-1">Flexibilidad total</h3>
                    <p class="text-sm text-gray-600">Renting, alquiler o explotación compartida. Tú eliges.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            {{-- Imagen --}}
            <div>
                <img src="{{ asset('images/resultados.png') }}" alt="Resultados" class="rounded-xl w-full object-cover">
            </div>

            {{-- Texto e íconos --}}
            <div>
                <h2 class="text-3xl font-bold mb-4">Resultados visibles,<br>clientes satisfechos</h2>
                <p class="text-gray-700 mb-6">
                    Nuestros equipos ofrecen resultados reales desde la primera sesión, con tecnología segura,
                    no invasiva y de última generación. Aumenta la fidelidad de tus clientes y la rentabilidad
                    de tu centro con confianza.
                </p>

                {{-- Lista de beneficios --}}
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/icons/tick.svg') }}" alt="Tick" class="w-5 h-5">
                        <span>Eficacia</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/icons/tick.svg') }}" alt="Tick" class="w-5 h-5">
                        <span>Acompañamiento</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/icons/tick.svg') }}" alt="Tick" class="w-5 h-5">
                        <span>Seguridad</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/icons/tick.svg') }}" alt="Tick" class="w-5 h-5">
                        <span>Transparencia</span>
                    </div>
                </div>

                {{-- Cifras destacadas --}}
                <div class="flex space-x-10 text-center">
                    <div>
                        <p class="text-2xl font-bold">120+</p>
                        <p class="text-sm text-gray-600">Clientes</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold">20+</p>
                        <p class="text-sm text-gray-600">Años</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold">3.000+</p>
                        <p class="text-sm text-gray-600">Tratamientos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            {{-- Texto --}}
            <div>
                <h2 class="text-2xl font-bold mb-4">Nos adaptamos a lo<br>que tu centro necesita</h2>
                <p class="text-gray-700 mb-6 text-sm leading-relaxed">
                    Tanto si eres un centro médico consolidado como si estás empezando en el mundo de la estética,
                    tenemos una solución a tu medida. Analizamos tu perfil, tus servicios y tu clientela,
                    y te proponemos la aparatología más adecuada, sin comprometer tu rentabilidad.
                </p>
                <a href="#"
                    class="inline-block bg-[#C9AE81] hover:bg-[#b89a6d] text-white px-5 py-2 rounded-full text-sm font-medium transition">
                    Saber más
                </a>
            </div>

            {{-- Imagen --}}
            <div>
                <img src="{{ asset('images/adaptamos.png') }}" alt="Nos adaptamos" class="rounded-xl w-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-white py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center mb-8">Lo que dicen de nosotros</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                La satisfacción de nuestros clientes es nuestra mejor carta de presentación.
                Descubre por qué tantos profesionales confían en Semsy Prof.
            </p>

            <div class="relative w-full overflow-hidden">
                <div class="flex animate-marquee">
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="w-[45%] shrink-0 px-4 py-6 bg-gray-50 rounded shadow mx-4">
                            <div class="flex items-center text-yellow-500 mb-2">
                                @for ($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M10 15l-5.878 3.09L5.5 12.545 1 8.91l6.06-.878L10 2l2.94 6.032 6.06.878-4.5 3.636 1.378 5.545z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm text-gray-800 mb-4">Gracias a Semsy Prof pudimos ofrecer tratamientos nuevos
                                sin gastar una fortuna. Siempre están ahí cuando los necesitamos.</p>
                            <div class="flex items-center space-x-2">
                                <img src="https://i.pravatar.cc/40?img={{ $i }}" class="w-8 h-8 rounded-full"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm font-semibold">John Smier {{ $i }}</p>
                                    <p class="text-xs text-gray-500">CEO de Twitter</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                    {{-- Copia para efecto continuo --}}
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="w-[45%] shrink-0 px-4 py-6 bg-gray-50 rounded shadow mx-4">
                            <div class="flex items-center text-yellow-500 mb-2">
                                @for ($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M10 15l-5.878 3.09L5.5 12.545 1 8.91l6.06-.878L10 2l2.94 6.032 6.06.878-4.5 3.636 1.378 5.545z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm text-gray-800 mb-4">Gracias a Semsy Prof pudimos ofrecer tratamientos nuevos
                                sin gastar una fortuna. Siempre están ahí cuando los necesitamos.</p>
                            <div class="flex items-center space-x-2">
                                <img src="https://i.pravatar.cc/40?img={{ $i + 10 }}" class="w-8 h-8 rounded-full"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm font-semibold">John Smier {{ $i + 10 }}</p>
                                    <p class="text-xs text-gray-500">CEO de Twitter</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>


@endsection
