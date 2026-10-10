<header class="h-16 bg-warm-card border-b border-warm-border px-8 flex items-center justify-between shrink-0 relative">
    {{-- Sisi Kiri: Judul Sistem, Lokasi & Breadcrumb --}}
    <div class="flex flex-col justify-center">
        <h2 class="text-base font-semibold text-[#2D2723] leading-tight">Sistem Pendukung Keputusan Hakim</h2>

        <div class="flex items-center gap-2 mt-0.5 text-xs text-[#7A6E65]">
            <span>Ruang Sidang Utama • PN Palangka Raya</span>

            {{-- Separator Pembatas --}}
            <span class="text-[#A39589]">•</span>

            {{-- Dynamic Breadcrumb Navigation --}}
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-1.5 text-[11px]">
                <a href="{{ route('dashboard') }}" class="hover:text-[#8C6D53] transition-colors flex items-center gap-1">
                    <svg class="w-3 h-3 text-[#8C6D53]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                @if (!request()->routeIs('dashboard'))
                    <span class="text-[#A39589]">/</span>
                    <span class="font-medium text-[#8C6D53]">
                        @if (request()->routeIs('analisis-dakwaan'))
                            Analisis Dakwaan
                        @elseif(request()->routeIs('database-kuhp'))
                            Database KUHP & Yurisprudensi
                        @else
                            {{ ucfirst(str_replace('-', ' ', request()->path())) }}
                        @endif
                    </span>
                @endif
            </nav>
        </div>
    </div>

    {{-- Sisi Kanan: Widget Tanggal/Jam, Icon Notifikasi + Modal, & Icon Logout --}}
    <div class="flex items-center gap-5">
        {{-- Widget Hari, Tanggal, Bulan, Tahun, & Jam (Tanpa Detik) --}}
        <div
            class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-warm-bg border border-warm-border text-xs font-medium text-[#5C5046]">
            <svg class="w-3.5 h-3.5 text-[#8C6D53]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span id="header-datetime">
                {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}
                {{ \Carbon\Carbon::now()->format('H:i') }}
            </span>
        </div>

        <div class="h-4 w-px bg-warm-border"></div>

        {{-- Container Relative Icon Notifikasi & Modal Popover --}}
        <div class="relative">
            <button id="notification-btn" type="button" onclick="toggleNotificationModal()"
                class="relative p-2 rounded-lg text-[#7A6E65] hover:text-[#2D2723] hover:bg-warm-bg transition-colors focus:outline-none"
                title="Notifikasi">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span id="notification-dot"
                    class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-[#8C6D53] ring-2 ring-warm-card"></span>
            </button>

            {{-- MODAL / POPOVER NOTIFIKASI --}}
            <div id="notification-modal"
                class="hidden absolute right-0 mt-3 w-80 md:w-96 bg-warm-card border border-warm-border rounded-xl shadow-lg z-50 overflow-hidden transform transition-all duration-200 origin-top-right">
                <div class="p-4 border-b border-warm-border flex items-center justify-between bg-warm-card">
                    <div class="flex items-center gap-2">
                        <h3 class="text-xs font-bold text-[#2D2723] uppercase tracking-wider">Notifikasi Sistem</h3>
                        <span class="px-2 py-0.5 text-[10px] bg-[#8C6D53] text-white rounded-full font-semibold">3
                            Baru</span>
                    </div>
                    <button onclick="markAllAsRead()"
                        class="text-[11px] text-[#8C6D53] hover:underline font-medium">Tandai Dibaca</button>
                </div>
                <div class="max-h-80 overflow-y-auto divide-y divide-warm-border">
                    <a href="#" class="p-3.5 flex gap-3 hover:bg-warm-bg transition-colors group">
                        <div class="w-2 h-2 rounded-full bg-[#8C6D53] mt-1.5 shrink-0"></div>
                        <div class="space-y-1">
                            <p
                                class="text-xs font-semibold text-[#2D2723] group-hover:text-[#8C6D53] transition-colors">
                                Ekstraksi Dakwaan Selesai</p>
                            <p class="text-[11px] text-[#7A6E65] leading-relaxed">Perkara No. 128/Pid.B/2026/PN Plk
                                berhasil diproses oleh sistem.</p>
                            <span class="text-[10px] text-[#A39589] block">5 menit yang lalu</span>
                        </div>
                    </a>
                    <a href="#" class="p-3.5 flex gap-3 hover:bg-warm-bg transition-colors group">
                        <div class="w-2 h-2 rounded-full bg-[#8C6D53] mt-1.5 shrink-0"></div>
                        <div class="space-y-1">
                            <p
                                class="text-xs font-semibold text-[#2D2723] group-hover:text-[#8C6D53] transition-colors">
                                Yurisprudensi Ditemukan</p>
                            <p class="text-[11px] text-[#7A6E65] leading-relaxed">Sistem mendeteksi 2 Putusan MA yang
                                relevan dengan pasal dakwaan.</p>
                            <span class="text-[10px] text-[#A39589] block">1 jam yang lalu</span>
                        </div>
                    </a>
                    <a href="#" class="p-3.5 flex gap-3 hover:bg-warm-bg transition-colors opacity-75 group">
                        <div class="w-2 h-2 rounded-full bg-transparent mt-1.5 shrink-0"></div>
                        <div class="space-y-1">
                            <p class="text-xs font-medium text-[#2D2723]">Jadwal Sidang Pembuktian</p>
                            <p class="text-[11px] text-[#7A6E65] leading-relaxed">Agenda sidang perkara Budi Santoso
                                dijadwalkan besok pukul 09:00 WIB.</p>
                            <span class="text-[10px] text-[#A39589] block">Kemarin</span>
                        </div>
                    </a>
                </div>
                <div class="p-3 bg-warm-bg border-t border-warm-border text-center">
                    <a href="#" class="text-xs font-semibold text-[#8C6D53] hover:underline">Lihat Semua Aktivitas
                        Perkara</a>
                </div>
            </div>
        </div>

        {{-- Tombol Logout --}}
        <form method="POST" action="" class="inline">
            @csrf
            <button type="submit"
                class="p-2 rounded-lg text-[#7A6E65] hover:text-red-700 hover:bg-warm-bg transition-colors focus:outline-none"
                title="Keluar / Logout">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>
    </div>
</header>

<script>
    function toggleNotificationModal() {
        const modal = document.getElementById('notification-modal');
        modal.classList.toggle('hidden');
    }

    document.addEventListener('click', function(event) {
        const modal = document.getElementById('notification-modal');
        const btn = document.getElementById('notification-btn');
        if (modal && btn && !btn.contains(event.target) && !modal.contains(event.target)) {
            modal.classList.add('hidden');
        }
    });

    function markAllAsRead() {
        const dot = document.getElementById('notification-dot');
        if (dot) dot.classList.add('hidden');
    }

    function updateHeaderTime() {
        const now = new Date();
        const optionsDate = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const dateStr = now.toLocaleDateString('id-ID', optionsDate);
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const timeStr = `${hours}:${minutes}`;
        const el = document.getElementById('header-datetime');
        if (el) {
            el.textContent = `${dateStr} ${timeStr}`;
        }
    }
    setInterval(updateHeaderTime, 30000);
</script>
