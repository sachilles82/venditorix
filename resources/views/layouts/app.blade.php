<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
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
    <!-- Alpine Js CDN -->
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>

    <!-- Styles -->
    @livewireStyles
</head>
<body class="h-full overflow-hidden">
<x-banner />

<div class="flex h-full" x-data="{ open: false }">
    @livewire('navigation-menu')

    <main class="flex-1 overflow-auto">
        <div class="py-6">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-2xl font-semibold text-gray-900">{{ $header }}</h1>
                </header>
            @endif
            <div class="mx-auto max-full px-4 sm:px-6 lg:px-8">
                <!-- Page Content -->
                {{ $slot }}
            </div>
        </div>
    </main>
</div>


@stack('modals')

@livewireScripts
</body>
</html>
