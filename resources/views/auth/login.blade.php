@extends('layouts.main')

@section('content')
    <div class="container mx-auto sm:px-4">
        <h2 class="mt-8 mb-4 text-center uppercase tracking-widest font-sans font-bold">
            {{-- @if (app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == 'inicio') --}}
            {{-- Crea tu cuenta para iniciar un trámite --}}
            {{-- @else --}}
            Inicia sesión o <a class="font-extrabold underline color-geen transition-all hover:font-black"
                href="/register">crea una cuenta</a> para
            comenzar un trámite
            {{-- @endif --}}
        </h2>
        <div class="justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div
                    class="rounded-t-lg bg-transparent border-none mt-8 mb-16 relative flex flex-col min-w-0 rounded break-words bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-brand-gray border-b-1 border-gray-300 text-white text-xl font-bold br-10-10-0-0">
                        <div class="flex-auto px-6 py-10 bg-darkgreen br-0-0-10-10 bg-login">
                            <p>Inicio de Sesión</p>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 rounded-b-lg">
                                <div class="pr-4 pl-4">
                                    <label for="email" class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-xl font-bold text-white">{{ __('Correo electrónico') }}</label>
                                    <input id="email" type="email" class="@error('email') is-invalid outline-red-500 @enderror rounded-md block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal text-gray-800 border border-gray-200 bg-white" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="mt-1 color-red text-base font-bold"
                                            role="alert"><strong>Estas credenciales no coinciden con nuestros registros.</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password"
                                    class="md:w-1/3 px-4 py-2 mb-0 leading-normal text-md-end text-xl font-bold text-white">{{ __('Contraseña') }}</label>
                                <div class="md:w-1/2 px-4 ">
                                    <input id="password" type="password"
                                        class="@error('password') is-invalid outline-red-500 @enderror rounded-md block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200"
                                        name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="mt-1 color-red text-base font-bold"
                                            role="alert"><strong>Estas credenciales no coinciden con nuestros registros.</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="md:w-1/2 px-4 md:mx-1/3">
                                    <div class="relative block mb-2">
                                        <input class="rounded absolute mt-1" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="pl-6 mb-0 font-bold text-white"
                                            for="remember">{{ __('Recordar usuario') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-0">
                                <div class=" px-4">
                                    <button type="submit"
                                        class="inline-block text-lg align-middle text-center select-none tracking-widest font-bold whitespace-no-wrap py-2 px-4 leading-normal no-underline text-white bg-red-600 hover-bg-red-600 mr-12 rounded-full border-2">{{ __('Iniciar sesión') }}</button>
                                    
                                    {{-- @if (Route::has('password.request'))
                                        <a class="inline-block align-middle text-lg text-center select-none tracking-widest whitespace-no-wrap py-2 px-4 leading-normal no-underline  text-white font-bold bg-red-600 ml-12 rounded-full border-2 hover-bg-red-600"
                                            href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
