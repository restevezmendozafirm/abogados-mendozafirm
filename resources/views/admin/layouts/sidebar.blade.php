
<!-- Sidebar -->
<div class="w-64 bg-gray-800 transition-all duration-300 ease-in-out sidebar" x-data="{ open: false }" :class="{ 'hidden': !open, 'block': open }">
    <div class="h-screen flex flex-col justify-between py-6 overflow-auto">
        <!-- Sidebar content -->
        <ul class="space-y-6">
            <li>
                <img class="w-40 mx-auto" src="/images/logo-banner.webp" alt="">
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-6 py-3 block">
                    Capacitación
                </a>
            </li>
            @if(Auth::user()->type == 'Admin' || Auth::user()->type == 'Capacitador')
                <li>
                    <a href="{{ route('usuarios') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-6 py-3 block">
                        Usuarios
                    </a>
                </li>
            @endif
            <li>
                <a href="{{ route('perfil') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-6 py-3 block">
                    Perfil
                </a>
            </li>
        </ul>
        <!-- Logout -->
        <div class="text-gray-300 hover:bg-gray-700 hover:text-white px-6 py-3 logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</div>
<style>
    .sidebar {
        width: 200px; /* Ancho original del sidebar */
        transition: width 0.5s ease; /
    }

    .sidebar.none {
        width: 0;
    }
    .sidebar.none ul, .none .logout {
        z-index: -1;
    }
</style>