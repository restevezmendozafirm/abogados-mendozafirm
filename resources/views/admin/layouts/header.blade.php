<header class="bg-white shadow">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <a href="#" class="text-gray-600 menu-icon font-bold"><span class="mr-1">☰</span> Menu</a>
            <div class="hidden md:flex">
                {{-- <img class="w-40 mx-auto" src="/images/logo-dark.webp" alt=""> --}}
            </div>
            <div class="flex items-center">
                <div class="mr-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Bienvenido, {{ session('currentUserName') }}</a>
                </div>
                <div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>