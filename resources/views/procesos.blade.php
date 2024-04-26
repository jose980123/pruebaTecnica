@extends('layouts.app')

@section('titulo', 'Procesos')

@section('contenido')
    <h1 class="font-extrabold text-center">Usuario: {{ $paciente->nombre }}</h1>
    @livewire('proceso', ['acciones' => $acciones])
@endsection