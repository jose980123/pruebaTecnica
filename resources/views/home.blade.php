{{-- Ya que es una plantilla se tiene que extender de otro documento .blade --}}
@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    {{-- Se llama un componente Livewire el cual tiene el contenido --}}
    @livewire('validacion')
@endsection
