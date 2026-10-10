<aside
    class="w-64 h-full bg-[#1A1614] text-[#E5DED6] flex flex-col shrink-0 border-r border-[#2A2421] relative overflow-hidden select-none">

    {{-- ================= BACKGROUND SILUET DEWI THEMIS (SIDEBAR ONLY) ================= --}}
    {{-- Diubah: bottom-10 (dinaikkan), -right-1 (digeser ke kiri/ke dalam), scale-x-[-1] (tetap flip ke kanan) --}}
    <div class="absolute -right-1 bottom-10 w-56 h-auto opacity-20 pointer-events-none z-0 transform scale-x-[-1]">
        <img src="{{ asset('images/dewi-themis.png') }}" alt="Siluet Dewi Themis"
            class="w-full h-auto object-contain filter grayscale contrast-125 mix-blend-lighten drop-shadow-md">
        {{-- Gradient Mask agar tepi atas & kanan (setelah flip) memudar halus menyatu dengan warna #1A1614 --}}
        <div class="absolute inset-0 bg-gradient-to-t from-[#1A1614] via-transparent to-[#1A1614]"></div>
        <div class="absolute inset-0 bg-gradient-to-l from-[#1A1614] via-transparent to-transparent"></div>
    </div>

    {{-- Brand / Header --}}
    <div
        class="h-16 flex items-center px-6 border-b border-[#2A2421] shrink-0 relative z-10 bg-[#1A1614]/90 backdrop-blur-xs">
        <div class="flex items-center gap-3">
            <div
                class="w-8 h-8 rounded bg-[#8C6D53] flex items-center justify-center text-white font-bold text-sm shadow-sm">
                SH
            </div>
            <div>
                <h1 class="text-sm font-semibold text-[#F5F2EE] tracking-wide">SPK HAKIM</h1>
                <p class="text-[10px] text-[#A39589] uppercase tracking-wider">Pengadilan Negeri</p>
            </div>
        </div>
    </div>

    {{-- Navigasi Utama --}}
    <nav class="flex-1 px-4 py-6 space-y-1.5 text-sm font-medium overflow-y-auto relative z-10">
        {{-- Dashboard Perkara --}}
        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-3 px-3 py-2.5 rounded-md transition-colors {{ request()->routeIs('dashboard') ? 'bg-[#2D2622] text-white' : 'text-[#A39589] hover:bg-[#26201D] hover:text-white' }}">
            <svg class="w-4 h-4 {{ request()->routeIs('dashboard') ? 'text-[#C2A388]' : '' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 011-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>Dashboard Perkara</span>
        </a>

        {{-- Analisis Dakwaan --}}
        <a href="{{ route('analisis-dakwaan') }}"
            class="flex items-center gap-3 px-3 py-2.5 rounded-md transition-colors {{ request()->routeIs('analisis-dakwaan') ? 'bg-[#2D2622] text-white' : 'text-[#A39589] hover:bg-[#26201D] hover:text-white' }}">
            <svg class="w-4 h-4 {{ request()->routeIs('analisis-dakwaan') ? 'text-[#C2A388]' : '' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span>Analisis Dakwaan</span>
        </a>

        {{-- Database KUHP & Yurisprudensi --}}
        <a href="{{ route('database-kuhp') }}"
            class="flex items-center gap-3 px-3 py-2.5 rounded-md transition-colors {{ request()->routeIs('database-kuhp') ? 'bg-[#2D2622] text-white' : 'text-[#A39589] hover:bg-[#26201D] hover:text-white' }}">
            <svg class="w-4 h-4 {{ request()->routeIs('database-kuhp') ? 'text-[#C2A388]' : '' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <span>Database KUHP & Yurisprudensi</span>
        </a>
    </nav>

    {{-- Profile User --}}
    <div class="p-4 border-t border-[#2A2421] shrink-0 relative z-10 bg-[#1A1614]/80 backdrop-blur-xs">
        <div class="flex items-center gap-3">
            <div
                class="w-9 h-9 rounded-full bg-[#3D332D] flex items-center justify-center font-semibold text-xs text-[#E5DED6] border border-[#4A3E37]">
                HK
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-xs font-semibold text-[#F5F2EE] truncate">Yang Mulia Hakim</p>
                <p class="text-[10px] text-[#A39589] truncate">NIP. 19820311 200801 1 008</p>
            </div>
        </div>
    </div>
</aside>
