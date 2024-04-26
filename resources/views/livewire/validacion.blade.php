<div>
    <div class="p-2">
        <div>
            {{-- Aqui se valida si hay un mensaje directo del controlador ProcesoController--}}
            @if (session('mensaje'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-600 font-bold p-3 mt-2 block">
                    {{session('mensaje')}}
                </div>
            @endif
        </div>

        {{-- Se crea un formulario el cual manda todo la ruta /procesos la cual esta vinculada
            al controlador ProcesosController --}}
        <form action="{{ route('procesos.store') }}" method="POST">
            @csrf
            <div class="p-2 text-center">
                <label for="documento" class="font-extrabold text-2xl">
                    Documento de Identidad
                </label>
                <input type="text" id="documento" name="documento" class="mt-2 w-full p-3 bg-gray-100 rounded-lg text-center
                    @error('documento')
                        border-2 border-red-500
                    @enderror" placeholder="Ingrese el documento" />
                    {{-- Se crea un mensaje de error para confirmar las validaciones que se hicieron en el controlador
                        ProcesoController --}}
                @error('documento')
                    <div class="bg-red-100 border-l-4 border-red-600 text-red-600 font-bold p-3 mt-2 block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="submit" value="Ingresar"
                class="bg-blue-500 hover:bg-blue-800 hover:shadow-lg active:bg-red-600 text-white w-full p-3 uppercase font-extrabold cursor-pointer rounded-lg" />
        </form>
    </div>
</div>