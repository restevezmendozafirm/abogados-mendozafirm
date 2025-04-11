@extends('layouts.main-backend')

@section('content')
<div class="flex h-screen bg-gray-200">
    @include('admin.layouts.sidebar')
    <div class="flex-1">
            @include('admin.layouts.header')
            <!-- Your main content goes here -->
            <div class="p-10">
                <div class="flex justify-between mb-8 items-center">
                    <h1 class="text-3xl font-bold text-gray-800 mb-8 inline-block">Ver Perfil</h1>
                    <a href="/abogados/administrador/perfil" class="bg-red text-white text-lg py-3 px-12 flex items-center font-semibold tracking-wider rounded-full h-11">Atrás</a>
                </div>
                <div class="flex justify-around	rounded-full">
                    <div class="w-full light-grey py-8 pb-4 px-8 text-center rounded-3xl shadow-xl">
                        <form action="{{ route('perfil.actualizar', $perfil->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex mt-8 justify-space-around pb-12 bc-ligth-grey items-center">
                                <div class="gap-12 grid grid-cols-3 mt-8 justify-space-around pb-4 bc-ligth-grey items-center w-full">
                                    <div class="flex flex-col">
                                        <label class="font-semibold" for="">Nombre:</label>
                                        {{$perfil->name}}
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="font-semibold" for="">Apellido:</label>
                                        {{$perfil->lname}}
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="font-semibold" for="">Correo:</label>
                                        {{$perfil->email}}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="bt-2-grey">
                                <input type="submit" value="Editar Perfil" class="bg-green-2 cursor-pointer bg-green-2-hover text-white font-bold text-lg tracking-widest py-3 px-12 mt-8 rounded-full">
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection