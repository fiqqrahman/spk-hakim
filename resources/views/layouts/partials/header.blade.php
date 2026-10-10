<header class="h-16 bg-[#FAF8F5] border-b border-[#E5DED6] px-8 flex items-center justify-between shrink-0">
    {{-- Sisi Kiri: Judul Sistem & Lokasi --}}
    <div>
        <h2 class="text-base font-semibold text-[#2D2723]">Sistem Pendukung Keputusan Hakim</h2>
        <p class="text-xs text-[#7A6E65]">Ruang Sidang Utama • PN Palangka Raya</p>
    </div>

    {{-- Sisi Kanan: Widget Tanggal/Jam, Icon Notifikasi, & Icon Logout --}}
    <div class="flex items-center gap-5">

        {{-- Widget Hari, Tanggal, Bulan, Tahun, & Jam (Tanpa Detik) --}}
        <div
            class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EFEB] border border-[#E5DED6] text-xs font-medium text-[#5C5046]">
            <svg class="w-3.5 h-3.5 text-[#8C6D53]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span id="header-datetime">
                {{-- Format PHP Fallback --}}
                {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }} •
                {{ \Carbon\Carbon::now()->format('H:i') }}
            </span>
        </div>

        <div class="h-4 w-px bg-[#E5DED6]"></div>

        {{-- Icon Notifikasi --}}
        <button type="button"
            class="relative p-2 rounded-lg text-[#7A6E65] hover:text-[#2D2723] hover:bg-[#F4EFEB] transition-colors focus:outline-none"
            title="Notifikasi">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            {{-- Badge Dot Indikator Notifikasi --}}
            <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-[#8C6D53] ring-2 ring-[#FAF8F5]"></span>
        </button>

        {{-- Tombol Logout (Hanya Icon) --}}
        <form method="POST" action="" class="inline">
            @csrf
            <button type="submit"
                class="p-2 rounded-lg text-[#7A6E65] hover:text-red-700 hover:bg-[#F4EFEB] transition-colors focus:outline-none"
                title="Keluar / Logout">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>

    </div>
</header>

{{-- Script Ringan untuk Realtime Update Jam Tanpa Detik --}}
<script>
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
            el.textContent = `${dateStr} • ${timeStr}`;
        }
    }

    // Update setiap 30 detik agar jam selalu akurat
    setInterval(updateHeaderTime, 30000);
</script>
