<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (isset($title))
            {{ $title }} | {{ config('app.name', 'Laravel') }}
        @else
            {{ config('app.name', 'Laravel') }}
        @endif
    </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/flags.css') }}"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('vendor/bladewind/js/datepicker.js') }}"></script>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">
        <div>
            <a href="/">
                <x-application-logo
                    class="h-20 w-20 fill-current text-gray-500" />
            </a>
        </div>

        <div
            class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    @stack('scripts')
</body>

</html>
