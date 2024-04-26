<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="flex flex-col items-center">
        <h1 class="text-center m-5 w-full p-5 text-4xl font-extrabold">Hospital La Misericordia</h1>
        <div class="">
            @yield('contenido')
        </div>
    </div>
    @livewireScripts
</body>
</html>