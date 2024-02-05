<!-- app.blade.php pt cursuri si homePage -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<style>
    
    .container{
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
        justify-content: center;
    }
</style>
<x-banner />
    @include('layouts.partialLayouts.header')

    <main class="mt-5 justify-items-center">
        <div class="container">
        @yield('content')
        </div>
    </main>

    @stack('modals')
    @livewireScripts
</body>
</html>
