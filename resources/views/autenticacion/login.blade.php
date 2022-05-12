@extends('layouts.app')

@section('title', 'Iniciar Sesión')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" style="margin-top:100px;">

    <div class="parent" style="display: flex;justify-content: center; ">
    <img src="{{asset('img/iconos/sesion.png')}}" style="height: 80px; width:80px;">
    </div>
    <h3 class="text-3xl text-center font-bold text-gray-400">Iniciar Sesión</h3>
    <form class="mt-4" method="POST" action="">
        @csrf
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 p-2 my-2 focus:bg-white" placeholder="Correo" id="email" name="email">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">

        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*Error</p>

        @enderror

        <button type="submit" class="rounded-md w-full text-lg text-white font-semibold p-2 my-3" style="background-color: #FFA92D;">Iniciar</button>
    </form>
</div>
@endsection