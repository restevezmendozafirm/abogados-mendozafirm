@php
    $show = false;
@endphp
@extends('layouts.main-backend')

@section('content')
<div class="flex h-screen bg-gray-200">
    @include('admin.layouts.sidebar')
    <div class="flex-1 h-screen overflow-auto">
            @include('admin.layouts.header')
            <!-- Your main content goes here -->
            <div class="p-10">
                <div class="flex justify-between mb-8 items-center">
                    <h1 class="text-3xl font-bold text-gray-800">Mi Perfil</h1>
                </div>
                <div class="flex justify-around">
                    <div class="w-full light-grey py-4 px-8 text-center rounded-3xl shadow-xl">
                        @if (session('success'))
                            <div class="bg-green-500 text-white py-4 px-6 mb-4 rounded">
                                <p class="text-lg font-semibold">{{ session('success') }}</p>
                            </div>
                        @endif
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Tipo</th>
                                    <th>Fecha Creación</th>
                                    <th>Fecha Actualización</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bt-2-grey">
                                    <td class="font-medium py-4">{{ $user->name }} {{ $user->lname }}</td>
                                    <td class="font-medium py-4">{{ $user->email }}</td>
                                    <td class="font-medium py-4">{{ $user->type }}</td>
                                    <td class="font-medium py-4">{{ $user->created_at->format('Y-m-d') }}</td>
                                    <td class="font-medium py-4">{{ $user->updated_at->format('Y-m-d') }}</td>
                                    <td class="font-medium py-4">
                                        <a href="{{ route('perfil.editar', $user->id) }}" class="mr-4">
                                            <i class="fa fa-pencil p-4 fa-icon" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection