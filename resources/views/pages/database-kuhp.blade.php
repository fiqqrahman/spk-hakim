@extends('layouts.app')

@section('title', 'Database KUHP & Yurisprudensi - SPK Hakim')

@section('content')
    <div class="w-full space-y-6" x-data="{ activeTab: 'kuhp', selectedItem: '362' }">
        {{-- Header & Search Bar --}}
        <div
            class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-base font-semibold text-[#2D2723]">Database KUHP & Yurisprudensi Mahkamah Agung</h1>
                <p class="text-xs text-[#7A6E65] mt-0.5">Rujukan regulasi pidana, kaidah hukum, SEMA/PERMA, dan pedoman
                    pemidanaan terkini.</p>
            </div>

            <div class="flex items-center gap-3 shrink-0">
                <div class="relative">
                    <input type="text" placeholder="Cari Pasal, No. Putusan, SEMA..."
                        class="w-72 px-3.5 py-1.5 pl-9 text-xs bg-[#F4EFEB] border border-[#E5DED6] rounded-lg text-[#2D2723] placeholder-[#A39589] focus:outline-none focus:border-[#8C6D53] transition-colors">
                    <svg class="w-3.5 h-3.5 text-[#A39589] absolute left-3 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <select
                    class="px-3 py-1.5 text-xs bg-[#F4EFEB] border border-[#E5DED6] rounded-lg text-[#5C5046] focus:outline-none focus:border-[#8C6D53]">
                    <option value="">Semua Klasifikasi</option>
                    <option value="harta">Tindak Pidana Harta Benda</option>
                    <option value="nyawa">Tindak Pidana Nyawa & Tubuh</option>
                    <option value="jabatan">Tindak Pidana Jabatan / Korupsi</option>
                </select>
            </div>
        </div>

        {{-- Filter Tabs Navigation --}}
        <div class="flex items-center gap-2 border-b border-[#E5DED6] pb-1 text-xs font-medium">
            <button @click="activeTab = 'kuhp'"
                :class="activeTab === 'kuhp' ? 'font-semibold text-[#8C6D53] border-b-2 border-[#8C6D53]' :
                    'text-[#7A6E65] hover:text-[#2D2723]'"
                class="px-4 py-2 transition-colors">
                KUHP (UU 1/1946 & UU 1/2023)
            </button>
            <button @click="activeTab = 'yurisprudensi'"
                :class="activeTab === 'yurisprudensi' ? 'font-semibold text-[#8C6D53] border-b-2 border-[#8C6D53]' :
                    'text-[#7A6E65] hover:text-[#2D2723]'"
                class="px-4 py-2 transition-colors">
                Yurisprudensi MA
            </button>
            <button @click="activeTab = 'sema_perma'"
                :class="activeTab === 'sema_perma' ? 'font-semibold text-[#8C6D53] border-b-2 border-[#8C6D53]' :
                    'text-[#7A6E65] hover:text-[#2D2723]'"
                class="px-4 py-2 transition-colors">
                SEMA / PERMA
            </button>
            <button @click="activeTab = 'pedoman'"
                :class="activeTab === 'pedoman' ? 'font-semibold text-[#8C6D53] border-b-2 border-[#8C6D53]' :
                    'text-[#7A6E65] hover:text-[#2D2723]'"
                class="px-4 py-2 transition-colors">
                Pedoman Pemidanaan
            </button>
        </div>

        {{-- Main Bento Grid Layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Katalog Konten Utama (Col Span 2) --}}
            <div class="lg:col-span-2 space-y-4">

                {{-- SECTION 1: TAB KUHP --}}
                <div x-show="activeTab === 'kuhp'" class="space-y-4">
                    {{-- Card Pasal 362 --}}
                    <div @click="selectedItem = '362'"
                        :class="selectedItem === '362' ? 'border-2 border-[#8C6D53]' :
                            'border border-[#E5DED6] hover:border-[#C2A388]'"
                        class="bg-[#FAF8F5] p-5 rounded-xl shadow-sm transition-all cursor-pointer relative">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#8C6D53] text-white">KUHP
                                        - Pasal 362</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Buku
                                        II • Kejahatan</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Tindak Pidana Pencurian (Biasa)</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-amber-900 bg-amber-100 px-2.5 py-1 rounded-lg border border-amber-200 shrink-0">
                                Maks. 5 Tahun
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Barang siapa mengambil barang sesuatu, yang seluruhnya atau sebagian kepunyaan orang lain,
                            dengan maksud untuk dimiliki secara melawan hukum...
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <div class="flex items-center gap-4">
                                <span><strong class="text-[#2D2723]">4 Unsur</strong> Pokok</span>
                                <span><strong class="text-[#2D2723]">12 Yurisprudensi</strong> Relevan</span>
                            </div>
                            <span class="text-[#8C6D53] font-semibold flex items-center gap-1">
                                <span>Detail Terpilih</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    {{-- Card Pasal 378 --}}
                    <div @click="selectedItem = '378'"
                        :class="selectedItem === '378' ? 'border-2 border-[#8C6D53]' :
                            'border border-[#E5DED6] hover:border-[#C2A388]'"
                        class="bg-[#FAF8F5] p-5 rounded-xl shadow-sm transition-all cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">KUHP
                                        - Pasal 378</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Buku
                                        II • Kejahatan</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Tindak Pidana Penipuan</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-amber-900 bg-amber-100 px-2.5 py-1 rounded-lg border border-amber-200 shrink-0">
                                Maks. 4 Tahun
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan
                            hukum, dengan memakai nama palsu atau martabat palsu...
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <div class="flex items-center gap-4">
                                <span><strong class="text-[#2D2723]">5 Unsur</strong> Pokok</span>
                                <span><strong class="text-[#2D2723]">18 Yurisprudensi</strong> Relevan</span>
                            </div>
                            <span class="text-[#7A6E65] font-medium flex items-center gap-1">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- SECTION 2: TAB YURISPRUDENSI MA --}}
                <div x-show="activeTab === 'yurisprudensi'" class="space-y-4" style="display: none;">
                    {{-- Yurisprudensi 1 --}}
                    <div
                        class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] hover:border-[#C2A388] shadow-sm transition-all cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#3D332D] text-white">Putusan
                                        MA No. 412/Pid/2022</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Kaidah
                                        Hukum</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Batas Penguasaan Fisik Barang dalam
                                    Pencurian</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-lg border border-emerald-200 shrink-0">
                                Preseden Tetap
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Pencurian dianggap selesai secara sempurna (voltooid) apabila barang yang diambil telah
                            berpindah tempat atau lepas dari kekuasaan pemiliknya secara nyata.
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <span>Relevan dengan: <strong class="text-[#2D2723]">Pasal 362, Pasal 363 KUHP</strong></span>
                            <span class="text-[#8C6D53] font-medium flex items-center gap-1">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    {{-- Yurisprudensi 2 --}}
                    <div
                        class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] hover:border-[#C2A388] shadow-sm transition-all cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#3D332D] text-white">Putusan
                                        MA No. 108/Pid/2024</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Kaidah
                                        Hukum</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Kriteria Pembuktian Saksi Tunggal
                                    (Unus Testis Nullus Testis)</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-lg border border-emerald-200 shrink-0">
                                Yurisprudensi
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Keterangan satu saksi tanpa didukung oleh alat bukti sah lainnya tidak dapat dijadikan dasar
                            yang cukup untuk membuktikan kesalahan Terdakwa.
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <span>Relevan dengan: <strong class="text-[#2D2723]">Pasal 185 KUHAP</strong></span>
                            <span class="text-[#8C6D53] font-medium flex items-center gap-1">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- SECTION 3: TAB SEMA / PERMA --}}
                <div x-show="activeTab === 'sema_perma'" class="space-y-4" style="display: none;">
                    {{-- PERMA No. 2 Tahun 2012 --}}
                    <div
                        class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] hover:border-[#C2A388] shadow-sm transition-all cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#8C6D53] text-white">PERMA
                                        No. 2/2012</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Pedoman
                                        Penyesuaian</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Penyesuaian Batas Tindak Pidana
                                    Ringan (Tipiring) & Denda</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-blue-900 bg-blue-100 px-2.5 py-1 rounded-lg border border-blue-200 shrink-0">
                                Berlaku Aktif
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Batas nilai kerugian materiil pada perkara pencurian ringan (Pasal 364 KUHP) dan penggelapan
                            ringan disesuaikan menjadi Rp2.500.000,00.
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <span>Nilai Ambang Kerugian: <strong class="text-[#2D2723]">Rp2.500.000,-</strong></span>
                            <span class="text-[#8C6D53] font-medium flex items-center gap-1">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    {{-- SEMA No. 1 Tahun 2023 --}}
                    <div
                        class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] hover:border-[#C2A388] shadow-sm transition-all cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#8C6D53] text-white">SEMA
                                        No. 1/2023</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Surat
                                        Edaran MA</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Penerapan Restorative Justice dalam
                                    Penjatuhan Pidana</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-blue-900 bg-blue-100 px-2.5 py-1 rounded-lg border border-blue-200 shrink-0">
                                Edaran MA
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Pedoman penyelesaian perkara pidana melalui pendekatan keadilan restoratif untuk tindak pidana
                            dengan ancaman kurungan ringan atau perdamaian para pihak.
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <span>Kriteria Utama: <strong class="text-[#2D2723]">Kerugian Ringan &
                                    Perdamaian</strong></span>
                            <span class="text-[#8C6D53] font-medium flex items-center gap-1">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- SECTION 4: TAB PEDOMAN PEMIDANAAN --}}
                <div x-show="activeTab === 'pedoman'" class="space-y-4" style="display: none;">
                    {{-- PERMA No. 1 Tahun 2020 --}}
                    <div
                        class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] hover:border-[#C2A388] shadow-sm transition-all cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-[#3D332D] text-white">PERMA
                                        No. 1/2020</span>
                                    <span
                                        class="px-2 py-0.5 text-[10px] font-medium rounded bg-[#EFE9E2] text-[#5C5046] border border-[#DDD5CC]">Pedoman
                                        Hakim</span>
                                </div>
                                <h3 class="text-sm font-semibold text-[#2D2723] mt-2">Pedoman Pemidanaan Pasal 2 & Pasal 3
                                    UU Tipikor</h3>
                            </div>
                            <span
                                class="text-xs font-semibold text-purple-900 bg-purple-100 px-2.5 py-1 rounded-lg border border-purple-200 shrink-0">
                                Matriks Kerugian
                            </span>
                        </div>
                        <p class="text-xs text-[#5C5046] mt-2.5 line-clamp-2 leading-relaxed">
                            Kerangka rentang penjatuhan hukuman berdasarkan kuisiner tingkat kerugian negara dan tingkat
                            kesalahan/peran Terdakwa.
                        </p>
                        <div
                            class="flex items-center justify-between mt-4 pt-3 border-t border-[#E5DED6] text-[11px] text-[#7A6E65]">
                            <span>Matriks Kategori: <strong class="text-[#2D2723]">Kategori I s.d V Kerugian
                                    Negara</strong></span>
                            <span class="text-[#8C6D53] font-medium flex items-center gap-1">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Detail Inspector Panel (Col Span 1) --}}
            <div class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm space-y-5 h-fit sticky top-6">
                <div class="border-b border-[#E5DED6] pb-3 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#8C6D53]">Detail Inspector</span>
                        <h2 class="text-sm font-semibold text-[#2D2723]"
                            x-text="selectedItem === '362' ? 'Pasal 362 KUHP (Pencurian)' : 'Pasal 378 KUHP (Penipuan)'">
                        </h2>
                    </div>
                    <button class="p-1.5 rounded-lg bg-[#F4EFEB] hover:bg-[#EFE9E2] text-[#7A6E65]" title="Salin Teks">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>

                {{-- Bunyi Teks Otentik --}}
                <div class="space-y-2">
                    <span class="text-xs font-semibold text-[#7A6E65]">Teks Otentik Bunyi Pasal:</span>
                    <div class="p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6] text-xs text-[#2D2723] leading-relaxed italic"
                        x-text="selectedItem === '362' 
                            ? '&quot;Barang siapa mengambil barang sesuatu, yang seluruhnya atau sebagian kepunyaan orang lain, dengan maksud untuk dimiliki secara melawan hukum, diancam karena pencurian...&quot;' 
                            : '&quot;Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu muslihat...&quot;'">
                    </div>
                </div>

                {{-- Unsur-Unsur Pembuktian --}}
                <div class="space-y-3">
                    <span class="text-xs font-semibold text-[#2D2723] block">Elemen Unsur Pembuktian:</span>

                    <div class="p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6] space-y-1">
                        <span class="text-xs font-semibold text-[#8C6D53]">1. Subjek Hukum</span>
                        <p class="text-[11px] text-[#7A6E65] leading-relaxed">Setiap orang/subjek hukum yang mampu
                            bertanggung jawab secara pidana.</p>
                    </div>

                    <div class="p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6] space-y-1">
                        <span class="text-xs font-semibold text-[#8C6D53]">2. Perbuatan / Modus</span>
                        <p class="text-[11px] text-[#7A6E65] leading-relaxed"
                            x-text="selectedItem === '362' ? 'Membawa barang ke dalam kekuasaan nyatanya.' : 'Memakai nama palsu, tipu muslihat, atau martabat palsu.'">
                        </p>
                    </div>
                </div>

                {{-- Yurisprudensi Rujukan --}}
                <div class="pt-3 border-t border-[#E5DED6] space-y-2">
                    <span class="text-xs font-semibold text-[#2D2723] block">Yurisprudensi Terkait Utama:</span>
                    <a href="#"
                        class="p-2.5 bg-[#F4EFEB] hover:bg-[#EFE9E2] rounded-lg border border-[#E5DED6] block transition-colors">
                        <p class="text-xs font-semibold text-[#2D2723]">Putusan MA No. 108/Pid/2024</p>
                        <p class="text-[10px] text-[#7A6E65] mt-0.5">Penetapan batas kerugian materiil ringan (PERMA No.
                            2/2012)</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
