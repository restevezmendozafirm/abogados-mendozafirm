@extends('layouts.main-backend')

@section('content')
<div class="flex h-screen bg-gray-200">
    @include('admin.layouts.sidebar')
    <div class="flex-1 h-screen overflow-auto">
            @include('admin.layouts.header')
            <!-- Your main content goes here -->
            <div class="p-10">
                <div class="flex justify-between mb-8 items-center">
                    <h1 class="text-3xl font-bold text-gray-800">Usuarios</h1>
                    <a href="{{ route('register') }}" class="bg-red text-white text-lg py-3 px-12 flex items-center font-semibold tracking-wider rounded-full h-11">Nuevo Usuario</a>
                </div>
                <div class="flex justify-around">
                    <div class="w-full light-grey py-4 px-8 text-center rounded-3xl shadow-xl">
                        <p class="text-2xl font-bold tgreen mt-4 mb-12">Todos los Usuarios</p>
                        @if (session('success'))
                            <div class="bg-green-500 text-white py-4 px-6 mb-4 rounded">
                                <p class="text-lg font-semibold">{{ session('success') }}</p>
                            </div>
                        @endif
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th>Nombre Completo</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Fecha Creación</th>
                                    <th>Fecha Actualización</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    @if (Auth::user()->type == 'Capacitador' && $user->type == "Agente" || Auth::user()->type == 'Admin') 
                                        <tr class="bt-2-grey">
                                            <td class="font-medium py-4">{{ $user->name }} {{ $user->lname }}</td>
                                            <td class="font-medium py-4">{{ $user->email }}</td>
                                            <td class="font-medium py-4">{{ $user->type }}</td>
                                            <td class="font-medium py-4">{{ $user->created_at }}</td>
                                            <td class="font-medium py-4">{{ $user->updated_at }}</td>
                                            <td class="font-medium py-4">
                                                <a href="{{ route('usuario.editar', $user->id) }}" class="mr-4">
                                                    <i class="fa fa-pencil p-4 fa-icon" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('eliminar.usuario', $user->id) }}" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que quieres eliminar el usuario: {{ $user->nombre }}?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">
                                                    <i class="fa fa-icon fa-trash p-4" aria-hidden="true"></i>
                                                </a>
                                                <form id="delete-form-{{ $user->id }}" action="{{ route('eliminar.usuario', $user->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginator">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection