@extends('layouts.main-backend')

@section('content')
<div class="back-login min-h-screen lg:grid flex flex-col grid-cols-11 justify-center items-center">
    <div class="col-span-5 lg:order-1 order-2 grid h-full xs:items-start justify-center md:items-center">
        <div class="flex flex-wrap justify-center items-center">
            <div class="w-full">
                <div class="rounded-t-lg bg-transparent border-none xs:my-8 2xl:my-6 relative flex flex-col min-w-0 rounded break-words bg-white border-1 border-gray-300">
                    <div class="py-3 md:px-12 2xl:px-36 xl:px-20 px-4 mb-0 bg-brand-gray rounded-t-xl border-b-1 text-center border-gray-300 text-white text-xl br-10-10-0-0">
                        <p class="xl:text-2xl lg:text-xl md:text-lg xs:text-base xs:mb-8 lg:mb-4 text-white tracking-wider text-shadow-2 md:mt-12 lg:mt-0 mt-12">
                            Log in to access our classes and tools designed to enhance your learning and growth.
                        </p>
                    </div>
                    <div class="flex-auto max-w-xl w-full mx-auto xs:px-8 xl:px-8 2xl:px-5 bg-darkgreen br-0-0-10-10 bg-login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="xs:mb-8 lg:mb-4 xl:mb-12 2xl:mb-14 rounded-b-lg">
                                <div class="pr-4 pl-4">
                                    <input id="email" type="email"
                                        class="rounded-full md:text-2xl lg:text-xl text-base tgreen-youtube font-medium text-center md:h-14 lg:h-12 xs:h-10 border-green-dark @error('email') is-invalid outline-red-500 @enderror block appearance-none w-full py-1 px-2 leading-normal text-gray-800 border border-gray-200 bg-white"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="User">
                                    @error('email')
                                        <span class="text-red block mt-2 text-base font-semibold" role="alert">
                                            These credentials do not match our records.
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="xs:mb-8 md:mb-4">
                                <div class="px-4">
                                    <input id="password" type="password"
                                        class="rounded-full md:h-14 lg:h-12 xs:h-10 md:text-2xl lg:text-xl text-base tgreen-youtube font-medium text-center border-green-dark @error('password') is-invalid outline-red-500 @enderror block appearance-none w-full py-1 px-2 leading-normal bg-white text-gray-800 border border-gray-200"
                                        name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="mt-1 text-white text-base font-semibold" role="alert">
                                            These credentials do not match our records.
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 md:mt-8 mt-8">
                                <div class="px-4">
                                    <div class="relative block mb-8">
                                        <label class="md:text-xl xs:text-base tracking-wider text-center xs:mb-4 xl:mb-6 2xl:mb-4 w-full block text-white" for="remember">
                                            <input class="mr-2 w-6 border-none h-6 rounded-md" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                                Remember User
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mb-3 mt-8">
                                <div class="px-4">
                                    <div class="relative block text-center md:mb-12 md-4">
                                        <a href="" class="md:text-xl xs:text-base block text-white">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="flex flex-wrap mb-0 justify-center">
                                <div class="px-4">
                                    <button type="submit"
                                        class="inline-block md:text-2xl xs:text-base align-middle text-center select-none tracking-widest font-bold whitespace-no-wrap py-1.5 px-12 leading-normal bg-red-login bg-red-hover no-underline text-white hover-bg-red-600 rounded-full">
                                        {{ __('START') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <img class="mx-auto md:mt-16 lg:mt-8 mt-12" src="/images/logo-white.webp" alt="logo">
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-span-6 lg:order-2 order-1 grid text-white h-full content-center">
        <p class="2xl:text-5xl md:text-4xl xs:text-xl text-center mt-24 md:mt-0 mb-6">Welcome to</p>
        <p class="2xl:text-6xl xl:text-5xl md:text-5xl xs:text-2xl font-bold text-center mb-6">MENDOZA UNIVERSITY</p>
        <p class="2xl:text-5xl md:text-4xl xs:text-xl font-italic font-time font-bold text-center">"Knowledge transforms lives."</p>
    </div>
</div>
@endsection
