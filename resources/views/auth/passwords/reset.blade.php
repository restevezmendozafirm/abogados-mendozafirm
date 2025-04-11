@extends('layouts.main')

@section('content')
    <div class="container mx-auto sm:px-4">
        <h2 class="mt-8 mb-4 text-center uppercase tracking-widest font-sans font-bold">
            Recupera tu Contraseña
        </h2>
        <div class="flex flex-wrap justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-brand-gray border-b-1 border-gray-300 text-white text-xl font-bold br-10-10-0-0">
                        {{ __('Recuperar Contraseña') }}</div>

                    <div class="flex-auto px-6 py-12 bg-login br-0-0-10-10">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="flex flex-wrap mb-8 justify-between">
                                <label for="email"
                                    class="md:w-1/3 text-lg pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-white font-bold">{{ __('Correo Electrónico') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="email" type="email"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap justify-between mb-8">
                                <label for="password"
                                    class="md:w-1/3 pr-4 text-lg pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-white font-bold">{{ __('Constraseña') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="password" type="password"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('password') bg-red-700 @enderror"
                                        name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-8 justify-between">
                                <label for="password-confirm"
                                    class="md:w-1/3 pr-4 pl-4 text-lg pt-2 pb-2 mb-0 leading-normal text-md-end text-white font-bold">{{ __('Confirmar Constraseña') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="password-confirm" type="password"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-0">
                                <div class="">
                                    <button type="submit"
                                        class="inline-block text-lg align-middle text-center select-none tracking-widest font-bold whitespace-no-wrap py-2 px-4 leading-normal no-underline text-white bg-red-600 hover-bg-red-600 mr-12 rounded-full border-2">
                                        {{ __('Recuperar Contraseña') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h3 class="mt-16 mb-16 text-center uppercase tracking-widest font-sans font-bold">
                    <a class="font-extrabold underline color-geen transition-all hover:font-black"
                        href="/login">iniciar sesión</a> para
                    comenzar un trámite
                </h3>
            </div>
        </div>
    </div>
@endsection
