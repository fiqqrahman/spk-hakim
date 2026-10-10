<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SPK Hakim - Perkara & Putusan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F4EFEB] text-[#2D2723] antialiased flex h-screen overflow-hidden">

    {{-- Sidebar Dark --}}
    @include('layouts.partials.sidebar')

    {{-- Main Area --}}
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
        {{-- Header --}}
        @include('layouts.partials.header')

        {{-- Toast Alert Notification --}}
        @include('components.toast-alert')

        {{-- Main Content --}}
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>