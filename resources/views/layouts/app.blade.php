<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Kursi') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-emerald-50">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-emerald-50">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class="bg-emerald-50">
                {{ $slot }}
            </main>
        </div>
    </body>
    <footer class="bg-emerald-50">
    <div class=" font-bold text-2xl font-sans text-center mb-5">
    TĪMEKĻA IZSTRĀDE PHP VALODĀ IESĀCĒJIEM
    <br>
    12.04.2022 - 09.06.2022
    </div>
    </footer>
</html>
