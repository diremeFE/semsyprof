<footer class="bg-[#1E1E1E] text-white py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">
        <!-- Logo -->
        <div>
            <img src="{{ asset('images/logo-footer.svg') }}" alt="SemsyProf Logo" class="h-20 mb-4">
        </div>

        <!-- Compañía -->
        <div>
            <h4 class="font-bold mb-2">COMPAÑÍA</h4>
            <ul class="space-y-1">
                <li><a href="#" class="hover:underline">Términos y condiciones</a></li>
                <li><a href="#" class="hover:underline">Política de privacidad</a></li>
                <li><a href="#" class="hover:underline">Política de cookies</a></li>
            </ul>
        </div>

        <!-- Información general -->
        <div>
            <h4 class="font-bold mb-2">INFORMACIÓN GENERAL</h4>
            <ul class="space-y-1">
                <li><a href="/" class="hover:underline">Inicio</a></li>
                <li><a href="{{ route('servicios') }}" class="hover:underline">Servicios</a></li>
                <li><a href="{{ route('ofrecemos') }}" class="hover:underline">Qué ofrecemos</a></li>
                <li><a href="{{ route('contacto') }}" class="hover:underline">Contacto</a></li>

            </ul>
        </div>

        <!-- Contacto -->
        <div>
            <h4 class="font-bold mb-2">CONTACTO</h4>
            <ul class="space-y-1">
                <li><a href="tel:+34690897786" class="hover:underline">+34 690897786</a></li>
                <li><a href="mailto:contacto@semsyprof.es" class="hover:underline">contacto@semsyprof.es</a></li>
            </ul>
        </div>
    </div>

    <!-- Redes sociales -->
    <div class="mt-8 flex justify-center space-x-4">
        <a href="#" class="hover:opacity-75"><i class="fab fa-instagram text-xl"></i></a>
        <a href="#" class="hover:opacity-75"><i class="fab fa-facebook text-xl"></i></a>
    </div>

    <!-- Footer bottom -->
    <div class="mt-6 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} SemsyProf. Todos los derechos reservados.
    </div>
</footer>
