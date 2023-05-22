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
</head>

<body class="flex flex-row justify-between font-sans antialiased">
    <!-- Sidebar -->
    @include('layouts.includes.sidebar')
    <div class="flex flex-col flex-grow w-full min-h-screen pl-0 ml-auto bg-gray-100 lg:pl-64 sm:pl-16">
        <!-- Navigation -->
        @include('layouts.navigation')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="main">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
