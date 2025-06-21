@extends('layouts.app')

@section('content')
    <section class="bg-[#f9f9f9] py-16 px-4">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    
    <!-- Columna izquierda: texto e info -->
    <div>
      <p class="text-[#CBAE67] font-medium uppercase text-sm mb-2">Estamos aquí para asesorarte</p>
      <h2 class="text-3xl md:text-4xl font-light leading-snug">
        <strong class="font-bold">HABLEMOS</strong> SOBRE<br> LO QUE TU CENTRO<br> NECESITA.
      </h2>
      <p class="text-gray-700 mt-6">
        ¿Buscas equipos médico-estéticos de última generación o un plan de alquiler a medida?<br>
        Nuestro equipo profesional te guiará paso a paso.
      </p>

      <div class="mt-8 space-y-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="bg-[#CBAE67] text-white p-2 rounded-full">
            ✉️
          </span>
          <span class="text-gray-800">contacto@semsyprof.com</span>
        </div>
        <div class="flex items-center gap-3">
          <span class="text-[#CBAE67] text-xl">📞</span>
          <span class="text-gray-800">+34 686 911 949</span>
        </div>
      </div>
    </div>

    <!-- Columna derecha: formulario -->
    <div class="bg-white rounded-xl shadow p-8">
      <form class="space-y-4">
        <div>
          <label class="text-xs font-semibold text-gray-600 uppercase">Nombre</label>
          <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 mt-1 text-sm" />
        </div>

        <div>
          <label class="text-xs font-semibold text-gray-600 uppercase">Correo electrónico</label>
          <input type="email" class="w-full border border-gray-300 rounded px-4 py-2 mt-1 text-sm" />
        </div>

        <div>
          <label class="text-xs font-semibold text-gray-600 uppercase">¿Qué servicio te interesa?</label>
          <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 mt-1 text-sm" />
        </div>

        <div>
          <label class="text-xs font-semibold text-gray-600 uppercase">Mensaje</label>
          <textarea rows="4" class="w-full border border-gray-300 rounded px-4 py-2 mt-1 text-sm"></textarea>
        </div>

        <button type="submit" class="mt-4 bg-[#CBAE67] text-white px-6 py-2 rounded-full font-semibold flex items-center gap-2 hover:bg-[#b69858] transition">
          Solicitar asesoramiento
          <span class="text-xl">→</span>
        </button>
      </form>
    </div>

  </div>
</section>

@endsection
