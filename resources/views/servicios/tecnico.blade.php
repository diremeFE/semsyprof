@extends('layouts.app')

@section('content')
    <section class="relative w-full h-[90vh] overflow-hidden">
    {{-- Hero Image de Renting y Venta --}}
    <img src="{{ asset('images/servicios/tecnico.png') }}" alt="Renting y Venta"
        class="absolute inset-0 w-full h-full object-cover z-0">
</section>


<section class="py-20 bg-white px-4">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-semibold tracking-wide mb-4 text-gray-900 uppercase">
            MANTENIMIENTO, REPARACIÓN Y <br>ASISTENCIA PROFESIONAL
        </h2>
        <p class="text-sm text-gray-700 leading-relaxed">
            En SemsyProf ponemos a tu disposición un equipo técnico altamente cualificado para garantizar el 
            funcionamiento óptimo de tus equipos médico-estéticos. Ya sea por revisión, reparación o asistencia 
            remota, estamos contigo cuando más lo necesitas.
        </p>
    </div>
</section>


@endsection
