@extends('layouts.main')

@section('content')
    <div class="container mx-auto sm:px-4">
        <h2 class="mt-8 mb-4 text-center uppercase tracking-widest font-sans font-bold">
            ¿Olvidaste tu contraseña?
        </h2>
        <div class="flex flex-wrap justify-center">
            <div class="md:w-2/3 pr-4 pl-4 mb-12">
                <div class="relative flex flex-col min-w-0 rounded break-words">
                    <div class="py-3 px-6 mb-0 bg-brand-gray border-b-1 border-gray-300 text-white text-xl font-bold br-10-10-0-0">
                        {{ __('Recuperar Contraseña') }}</div>

                    <div class="flex-auto p-6 bg-login br-0-0-10-10">
                        @if (session('status'))
                            <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800"
                                role="alert">
                                Hemos enviado el enlace para restablecer tu contraseña por correo electrónico.
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="flex flex-wrap mb-3 mt-8">
                                <label for="email"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-xl font-bold text-white">{{ __('Correo Electrónico') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="email" type="email"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-0">
                                <div class="pr-4 pl-4">
                                    <button type="submit"
                                        class="inline-block mt-8 text-base align-middle text-center select-none tracking-widest font-bold whitespace-no-wrap py-2 px-4 leading-normal no-underline text-white bg-red-600 hover-bg-red-600 mr-12 rounded-full border-2">
                                        {{ __('Enviar Link de Recuperar Contraseña') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h3 class="mt-16 mb-4 text-center uppercase tracking-widest font-sans font-bold">
                    <a class="font-extrabold underline color-geen transition-all hover:font-black"
                        href="/login">iniciar sesión</a> para
                    comenzar un trámite
                </h3>
            </div>
        </div>
    </div>
@endsection
