@extends('layouts.app')

@section('content')
    {{-- Hero con imagen de fondo --}}
    <section class="relative w-full h-[60vh] overflow-hidden">
        <img src="{{ asset('images/servicios/hero-explotacion.jpg') }}" alt="Explotación compartida"
             class="absolute inset-0 w-full h-full object-cover z-0">
    </section>


    <section class="py-16 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        {{-- Texto --}}
        <div>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 uppercase text-gray-900">
                ¿Qué es la explotación<br class="block md:hidden"> compartida?
            </h2>
            <p class="text-gray-700 text-sm leading-relaxed">
                La explotación compartida consiste en utilizar un equipo médico-estético junto a otros profesionales o centros,
                compartiendo tanto el coste como el uso.<br><br>
                En SemsyProf nos encargamos de toda la gestión logística y técnica para que tú solo te centres en atender a tus clientes.
            </p>
        </div>

        {{-- Imagen --}}
        <div>
            <img src="{{ asset('images/explo-comp.png') }}" alt="Explotación compartida"
                 class="w-full rounded-xl object-cover">
        </div>
    </div>
</section>


<section class="py-16 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        {{-- Imagen --}}
        <div>
            <img src="{{ asset('images/servicios/explotacion-funciona.png') }}" alt="Cómo funciona" class="w-full rounded-xl object-cover">
        </div>

        {{-- Texto --}}
        <div class="text-center md:text-left">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 uppercase text-gray-900">¿CÓMO FUNCIONA?</h2>
            <p class="text-gray-700 text-sm leading-relaxed">
                <strong>Planificación de la agenda:</strong> Tú eliges los días u horas en los que deseas tener el equipo en tu centro.<br>
                <strong>Entrega y recogida:</strong> Nos encargamos del transporte y configuración en cada uso.<br>
                <strong>Formación incluida:</strong> Recibes formación para ti o tu equipo antes del primer uso.<br>
                <strong>Asistencia técnica:</strong> Siempre disponible durante los días de uso compartido.
            </p>
        </div>
    </div>
</section>


<section class="py-20 px-6 max-w-6xl mx-auto">
    <h2 class="text-center text-xl font-semibold uppercase mb-16 tracking-wide">Ventajas para tu centro</h2>

    <div class="space-y-24">

        {{-- 1 --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-12">
            <div class="md:w-1/2">
                <h3 class="font-bold text-lg mb-2">Ahorro significativo en costes.</h3>
                <p class="text-sm text-gray-700">
                    Ahorras significativamente en costes al compartir el equipo con otros centros o profesionales. Pagas solo por el tiempo de uso, evitando grandes inversiones iniciales.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-end">
                <img src="{{ asset('images/ventajas/01.png') }}" alt="01" class="w-24 md:w-32 lg:w-40" />
            </div>
        </div>

        {{-- 2 --}}
        <div class="flex flex-col md:flex-row-reverse justify-between items-center gap-12">
            <div class="md:w-1/2">
                <h3 class="font-bold text-lg mb-2">Flexibilidad total de uso.</h3>
                <p class="text-sm text-gray-700">
                    Escoge cuándo y cuánto deseas utilizar el equipo. La agenda se adapta a tu disponibilidad y volumen de trabajo, sin permanencias.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-start">
                <img src="{{ asset('images/ventajas/02.png') }}" alt="02" class="w-24 md:w-32 lg:w-40" />
            </div>
        </div>

        {{-- 3 --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-12">
            <div class="md:w-1/2">
                <h3 class="font-bold text-lg mb-2">Acceso a tecnología avanzada sin compromiso de compra.</h3>
                <p class="text-sm text-gray-700">
                    Puedes ofrecer tratamientos de última generación sin adquirir el equipo. Así amplías tus servicios sin riesgos financieros.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-end">
                <img src="{{ asset('images/ventajas/03.png') }}" alt="03" class="w-24 md:w-32 lg:w-40" />
            </div>
        </div>

        {{-- 4 --}}
        <div class="flex flex-col md:flex-row-reverse justify-between items-center gap-12">
            <div class="md:w-1/2">
                <h3 class="font-bold text-lg mb-2">Ideal para testear nuevos tratamientos antes de invertir.</h3>
                <p class="text-sm text-gray-700">
                    Prueba la aceptación de un nuevo tratamiento antes de comprar el equipo. Te permite validar su rentabilidad sin asumir riesgos.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-start">
                <img src="{{ asset('images/ventajas/04.png') }}" alt="04" class="w-24 md:w-32 lg:w-40" />
            </div>
        </div>

        {{-- 5 --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-12">
            <div class="md:w-1/2">
                <h3 class="font-bold text-lg mb-2">Sin preocuparte del mantenimiento ni la amortización.</h3>
                <p class="text-sm text-gray-700">
                    Olvídate de gastos de reparación, mantenimiento o desvalorización. Nosotros nos encargamos de todo para que tú solo trabajes.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-end">
                <img src="{{ asset('images/ventajas/05.png') }}" alt="05" class="w-24 md:w-32 lg:w-40" />
            </div>
        </div>

    </div>
</section>



@endsection
