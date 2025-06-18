<header class="w-full text-sm text-gray-700">
    <div class="bg-black text-white py-1 px-4 text-center text-xs uppercase tracking-wide">
        Venta, alquiler y explotación compartida de aparatología estética para clínicas médicas, fisioterapia, salones
        de belleza, centros de estética y spas
    </div>

    <div class="flex items-center justify-between px-6 py-4 bg-white border-b">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/icons/call.svg') }}" alt="Teléfono" class="w-4 h-4" />
            <span>+34 690897786</span>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/logo.svg') }}" alt="SemsyProf Logo" class="h-72 mx-auto" />
        </div>

        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/icons/sms.svg') }}" alt="Email" class="w-4 h-4" />
            <span>contacto@semsyprof.es</span>
        </div>
    </div>

    <nav class="bg-white py-3 shadow-sm">
        <ul class="flex justify-center space-x-8 font-semibold">
            <li>
                <a href="{{ route('servicios') }}"
                    class="{{ request()->is('servicios') ? 'text-[#CBAE67]' : 'hover:text-gold transition' }}">
                    SERVICIOS
                </a>
            </li>
            <li>
                <a href="{{ route('ofrecemos') }}"
                    class="{{ request()->is('ofrecemos') ? 'text-[#CBAE67]' : 'hover:text-gold transition' }}">
                    ¿QUÉ OFRECEMOS?
                </a>
            </li>
            <li>
                <a href="{{ route('contacto') }}"
                    class="{{ request()->is('contacto') ? 'text-[#CBAE67]' : 'hover:text-gold transition' }}">
                    CONTACTO
                </a>
            </li>
        </ul>
    </nav>

</header>
