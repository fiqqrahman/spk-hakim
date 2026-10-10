<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SPK Hakim - Perkara & Putusan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Alpine.js CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[#F4EFEB] text-[#2D2723] antialiased flex h-screen overflow-hidden relative">

    {{-- ================= UTAMA (UI LAYER) ================= --}}
    {{-- Sidebar Partial Inclusion --}}
    <div class="relative z-20 shrink-0 h-full flex">
        @include('layouts.partials.sidebar')
    </div>

    {{-- Main Work Area --}}
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden relative z-10">
        {{-- Header --}}
        @include('layouts.partials.header')

        {{-- Toast Alert Notification --}}
        @include('components.toast-alert')

        {{-- Main Content Window --}}
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>

</body>

</html>
