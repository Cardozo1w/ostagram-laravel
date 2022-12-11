<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
<body class="bg-gray-100">
<header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center text-gray-700">
    <h1 class="text-3xl font-bold">Ostagram</h1>
    <nav class="flex gap-6 uppercase text-sm font-semibold">
        <a href="">Login</a>
        <a href="{{route('register')}}">Crear Cuenta</a>
    </nav>
</div>
</header>

<main class="container mx-auto mt-8">
    <h2 class="text-center text-3xl font-bold mb-8">@yield('titulo')</h2>
        <section>
            @yield('contenido')
        </section>
</main>

<footer class="text-center font-bold uppercase p-4 absolute bottom-0 w-full">
    Oscar2so - All rights reserved {{ date('Y') }}
</footer>
  
</body>
</html>