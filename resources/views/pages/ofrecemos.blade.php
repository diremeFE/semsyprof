@extends('layouts.app')

@section('content')
    <section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">
    <!-- Título -->
    <div>
        <h2 class="text-4xl font-serif font-semibold leading-tight">
            ¿Cómo <br> trabajamos?
        </h2>
    </div>

    <!-- Texto -->
    <div>
        <p class="text-sm text-gray-700 leading-relaxed">
            En Semsy Prof ofrecemos una experiencia completamente personalizada desde el primer contacto.
            Analizamos tus necesidades, te asesoramos con honestidad y claridad, y te guiamos paso a paso hacia
            el tratamiento más adecuado para tu centro o para ti.
        </p>
    </div>
</section>


<section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-6">
    <!-- Paso 1 -->
    <div class="bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] text-white rounded-xl p-6 shadow-lg relative overflow-hidden">
        <div class="absolute top-4 left-4 bg-white text-black rounded-full w-7 h-7 flex items-center justify-center text-sm font-bold">1</div>
        <h3 class="text-lg font-semibold mt-10 mb-2">Recepción personalizada</h3>
        <p class="text-sm text-gray-200">Realizamos una entrevista inicial contigo para conocer tus necesidades, objetivos estéticos y resolver tus dudas.</p>
    </div>

    <!-- Paso 2 -->
    <div class="bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] text-white rounded-xl p-6 shadow-lg relative overflow-hidden">
        <div class="absolute top-4 left-4 bg-white text-black rounded-full w-7 h-7 flex items-center justify-center text-sm font-bold">2</div>
        <h3 class="text-lg font-semibold mt-10 mb-2">Valoración profesional</h3>
        <p class="text-sm text-gray-200">Analizamos tu caso y te explicamos detalladamente el tratamiento más adecuado, adaptado a ti y a tus expectativas.</p>
    </div>

    <!-- Paso 3 (ocupa toda la fila en responsive) -->
    <div class="md:col-span-2 bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] text-white rounded-xl p-6 shadow-lg relative overflow-hidden">
        <div class="absolute top-4 left-4 bg-white text-black rounded-full w-7 h-7 flex items-center justify-center text-sm font-bold">3</div>
        <h3 class="text-lg font-semibold mt-10 mb-2">Tratamiento programado</h3>
        <p class="text-sm text-gray-200">Concertamos la sesión ideal para ti, asegurando puntualidad, comodidad y resultados visibles desde el primer momento.</p>
    </div>
</section>



<section class="relative max-w-4xl mx-auto px-6 py-20">
    <div class="relative rounded-xl overflow-hidden">
        <img src="{{ asset('images/trabajo.png') }}" alt="Estilo profesional" class="w-full h-auto object-cover">
    </div>
</section>


<!-- Sección principal con fondo blanco y curva hacia abajo -->
<section class="relative bg-white pb-32 overflow-hidden">
    <!-- Media luna dorada invertida en la parte inferior -->
    <div class="absolute bottom-0 w-full h-40 bg-[#CBAE67] rounded-t-[100%] z-0"></div>

    <!-- Texto y botón centrado con letras negras -->
    <div class="relative z-10 max-w-5xl mx-auto text-center px-4 pt-20">
        <h1 class="text-5xl mb-5">¿Por qué elegirnos?</h1>
        <h2 class="text-black text-lg md:text-xl font-medium leading-relaxed max-w-3xl mx-auto">
            En Semsy Prof creemos que la tecnología estética debe estar al alcance de todos los profesionales, sin complicaciones, sin grandes inversiones y con un trato cercano y humano. Por eso, ofrecemos soluciones integrales que se adaptan a las necesidades reales de cada centro, ya sea mediante alquiler flexible, renting, venta directa o explotación compartida.
        </h2>

        <a href="#contacto" class="inline-block mt-6 bg-black text-white px-6 py-2 rounded-full font-medium hover:bg-gray-900 transition">
            Contactar
        </a>
    </div>
</section>

<!-- Tarjetas con fondo dorado -->
<section class="bg-[#CBAE67] relative z-10 py-16">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-black text-white rounded-xl p-6 text-left">
            <div class="text-2xl mb-2">⚙️</div>
            <h3 class="font-semibold text-lg mb-2">Flexibilidad total</h3>
            <p class="text-sm">Elige entre alquiler, renting o compra según lo que necesite tu centro. Sin ataduras ni inversiones iniciales.</p>
        </div>

        <div class="bg-white text-black rounded-xl p-6 text-left shadow">
            <div class="text-2xl mb-2">🔬</div>
            <h3 class="font-semibold text-lg mb-2">Tecnología de vanguardia</h3>
            <p class="text-sm">Equipos médico-estéticos de última generación, seguros, eficaces y siempre actualizados.</p>
        </div>

        <div class="bg-white text-black rounded-xl p-6 text-left shadow">
            <div class="text-2xl mb-2">🛠️</div>
            <h3 class="font-semibold text-lg mb-2">Soporte técnico especializado</h3>
            <p class="text-sm">Nuestro equipo técnico está a tu disposición para mantenimiento y reparaciones con garantía profesional.</p>
        </div>

        <div class="bg-white text-black rounded-xl p-6 text-left shadow">
            <div class="text-2xl mb-2">🤝</div>
            <h3 class="font-semibold text-lg mb-2">Explotación compartida sin riesgos</h3>
            <p class="text-sm">Gana dinero desde el primer día con nuestro sistema de explotación compartida. Nosotros nos encargamos de todo.</p>
        </div>

        <div class="bg-white text-black rounded-xl p-6 text-left shadow">
            <div class="text-2xl mb-2">📚</div>
            <h3 class="font-semibold text-lg mb-2">Formación incluida</h3>
            <p class="text-sm">Te enseñamos a usar cada equipo con seguridad y eficacia. Incluye protocolos y resultados reales desde el primer tratamiento.</p>
        </div>

        <div class="bg-white text-black rounded-xl p-6 text-left shadow">
            <div class="text-2xl mb-2">🧑‍⚕️</div>
            <h3 class="font-semibold text-lg mb-2">Atención personalizada</h3>
            <p class="text-sm">Cada centro es único. Te asesoramos según tus necesidades, adaptando las soluciones a tu medida.</p>
        </div>
    </div>
</section>


@endsection
