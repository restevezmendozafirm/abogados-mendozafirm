@extends('layouts.main-backend')

@section('content')
<div class="flex h-screen bg-gray-200">
    @include('admin.layouts.sidebar')
    <div class="flex-1">
        @include('admin.layouts.header')
        <div class="p-10 w80 mx-auto">
            <div class="flex justify-between mb-8 items-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-8 inline-block">Nuevo Usuario</h1>
                <a href="/abogados/administrador/usuarios" class="bg-red my-4 rounded-full hover-bg-red-600 border-2 py-2 px-12 user-registration-btn text-lg font-bold tracking-wide text-white font-sans hover:scale-110 transition-all">Cancelar</a>
            </div>
            <div class="flex justify-around	rounded-full">
                <div class="w-full light-grey py-8 pb-4 px-8 text-center rounded-3xl shadow-xl">
                    <div class="flex-auto p-6 bg-login">
                        <form method="POST" action="{{ route('new-user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-wrap justify-between mb-6">
                                <label for="name"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-lg text-black font-bold">{{ __('Nombre') }}<span
                                        class="text-red-500">&nbsp;*</span></label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="name" type="text"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-lg leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('name') bg-red-700 @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap justify-between mb-6">
                                <label for="last"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-lg text-black font-bold">{{ __('Apellido') }}<span
                                        class="text-red-500">&nbsp;*</span></label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="lname" type="text"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-lg leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('name') bg-red-700 @enderror"
                                        name="lname" value="{{ old('lname') }}" autocomplete="lname" autofocus>
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-3 justify-between">
                                <label for="email"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-lg text-black font-bold">{{ __('Correo electrónico') }}<span
                                        class="text-red-500">&nbsp;*</span></label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="email" type="email"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-lg leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap justify-between mb-6">
                                <label for="password"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-lg text-black font-bold">{{ __('Contraseña') }}<span
                                        class="text-red-500">&nbsp;*</span></label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="password" type="password"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-lg leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('password') bg-red-700 @enderror"
                                        name="password" autocomplete="new-password">

                                    @error('password')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap justify-between mb-6">
                                <label for="password-confirm"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-lg text-black font-bold">{{ __('Confirmar contraseña') }}<span
                                        class="text-red-500">&nbsp;*</span></label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="password-confirm" type="password"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-lg leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="flex flex-wrap justify-between mb-6">
                                <label for="type"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end text-lg text-black font-bold">{{ __('Tipo de Usuario') }}<span
                                        class="text-red-500">&nbsp;*</span></label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <select class="block appearance-none w-full py-1 px-2 mb-1 text-lg leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="type" id="type">
                                        @if (Auth::user()->type == 'Admin')
                                            <option value="Admin">Admininstrador</option>
                                            <option value="Capacitador">Capacitador</option>
                                        @endif
                                        <option value="Agente">Agente</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-0">
                                <div class="w-full pr-4 pl-4">
                                    <button type="submit"
                                        class="bg-red my-4 rounded-full hover-bg-red-600 py-2 px-6 user-registration-btn uppercase font-bold tracking-wide text-white font-sans hover:scale-110 transition-all">{{ __('Crear cuenta') }}</button>
                                </div>
                            </div>
                            <p class="text-center text-black font-bold">Campos marcados con<span class="text-red-500">&nbsp;*</span>&nbsp;son
                                obligatorios</p>
                                @error('name')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="mt-4 font-bold text-black text-lg">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection