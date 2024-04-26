<div>
    @foreach ($acciones as $accion )
            <div class="bg-blue-500 m-3 p-5 cursor-pointer rounded-lg shadow-lg text-center hover:bg-blue-800 active:bg-red-800">
                <a href="{{ route('turno.index') }}" class="text-white font-extrabold">{{ $accion->nombre}}</a>
            </div>
    @endforeach
    <div class="mt-2 flex justify-center">
        <a href="/" class="bg-blue-500 m-2 p-3 rounded-lg shadow-lg text-center hover:bg-blue-800 active:bg-red-800 text-white font-extrabold">Regresar</a>
    </div>
</div>
