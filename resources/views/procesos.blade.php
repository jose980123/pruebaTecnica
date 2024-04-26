@extends('layouts.app')

@section('titulo', 'Procesos')

@section('contenido')
    {{-- Se muetra el nombre del usuario mediante la variables del aconsulta anterior --}}
    <h1 class="font-extrabold text-center">Usuario: {{ $paciente->nombre }}</h1>

    {{-- Este componente de Livewire mostrara todos los procesos que se pueden hacer 
        y se le pasa la variables al cual contiene toda la informacion de los procesos --}}
    @livewire('proceso', ['acciones' => $acciones])
@endsection