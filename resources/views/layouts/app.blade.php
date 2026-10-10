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

    {{-- ================= BACKGROUND SILUET DEWI THEMIS ================= --}}
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden select-none">
        {{-- Soft Ambient Glow --}}
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_60%,rgba(140,109,83,0.05),transparent_50%)]">
        </div>

        {{-- Siluet Artwork Dewi Themis (Posisi Terkunci Hanya Di Kanan Bawah) --}}
        <div
            class="absolute -right-8 -bottom-10 w-[380px] md:w-[480px] lg:w-[580px] h-auto opacity-15 grayscale contrast-125 mix-blend-multiply pointer-events-none">
            <img src="{{ asset('images/dewi-themis.png') }}" alt="Siluet Dewi Themis"
                class="w-full h-auto object-contain filter drop-shadow-md">
            {{-- Gradient Mask memudar di tepi kiri dan atas gambar --}}
            <div class="absolute inset-0 bg-gradient-to-t from-[#F4EFEB]/80 via-transparent to-[#F4EFEB]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#F4EFEB] via-transparent to-transparent"></div>
        </div>
    </div>

    {{-- ================= UTAMA (UI LAYER) ================= --}}
    {{-- Sidebar Partial Inclusion (Langsung di-render dengan z-index tinggi) --}}
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
