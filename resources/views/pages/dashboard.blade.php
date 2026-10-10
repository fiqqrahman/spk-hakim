@extends('layouts.app')

@section('title', 'Dashboard Perkara - SPK Hakim')

@section('content')
    <div class="w-full space-y-6">

        {{-- Top Grid: Stat Metric Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            {{-- Card 1: Perkara Aktif --}}
            <div class="bg-warm-card p-5 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65]">Total Perkara Aktif</span>
                    <span class="p-1.5 rounded-lg bg-[#EFE9E2] text-[#8C6D53]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 flex items-baseline justify-between">
                    <span class="text-3xl font-bold text-[#2D2723]">12</span>
                    <span class="text-xs text-emerald-700 font-medium">+2 minggu ini</span>
                </div>
            </div>

            {{-- Card 2: Tahap Pembuktian --}}
            <div class="bg-warm-card p-5 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65]">Tahap Pembuktian</span>
                    <span class="p-1.5 rounded-lg bg-[#EFE9E2] text-[#8C6D53]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 flex items-baseline justify-between">
                    <span class="text-3xl font-bold text-[#2D2723]">5</span>
                    <span class="text-xs text-[#7A6E65]">41.6% dari total</span>
                </div>
            </div>

            {{-- Card 3: Siap Putusan --}}
            <div class="bg-warm-card p-5 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65]">Siap Putusan</span>
                    <span class="p-1.5 rounded-lg bg-[#EFE9E2] text-[#8C6D53]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 flex items-baseline justify-between">
                    <span class="text-3xl font-bold text-[#2D2723]">3</span>
                    <span class="text-xs text-amber-700 font-medium">Prioritas agenda</span>
                </div>
            </div>

            {{-- Card 4: Rata-rata Durasi Perkara --}}
            <div class="bg-warm-card p-5 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65]">Rata-rata Durasi</span>
                    <span class="p-1.5 rounded-lg bg-[#EFE9E2] text-[#8C6D53]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 flex items-baseline justify-between">
                    <span class="text-3xl font-bold text-[#2D2723]">18 <span
                            class="text-sm font-normal text-[#7A6E65]">Hari</span></span>
                    <span class="text-xs text-emerald-700 font-medium">Sesuai SOP</span>
                </div>
            </div>
        </div>

        {{-- Section Charts: Bar Chart & Donut Chart --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

            {{-- Bar Chart: Distribusi Pasal Dominan --}}
            <div
                class="lg:col-span-2 bg-warm-card p-6 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-semibold text-[#2D2723]">Distribusi Pasal Dakwaan Bulan Ini</h3>
                        <p class="text-xs text-[#7A6E65] mt-0.5">Frekuensi penerapan pasal KUHP dalam perkara aktif</p>
                    </div>
                    <span class="text-xs text-[#8C6D53] font-medium">Oktober 2026</span>
                </div>

                <div class="space-y-3 pt-2">
                    {{-- Item 1 --}}
                    <div class="space-y-1">
                        <div class="flex justify-between text-xs text-[#5C5046] font-medium">
                            <span>Pasal 362 KUHP (Pencurian)</span>
                            <span>5 Perkara (41%)</span>
                        </div>
                        <div class="w-full bg-[#EFE9E2] h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#8C6D53] h-full rounded-full" style="width: 41.6%"></div>
                        </div>
                    </div>

                    {{-- Item 2 --}}
                    <div class="space-y-1">
                        <div class="flex justify-between text-xs text-[#5C5046] font-medium">
                            <span>Pasal 378 KUHP (Penipuan)</span>
                            <span>3 Perkara (25%)</span>
                        </div>
                        <div class="w-full bg-[#EFE9E2] h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#A3856C] h-full rounded-full" style="width: 25%"></div>
                        </div>
                    </div>

                    {{-- Item 3 --}}
                    <div class="space-y-1">
                        <div class="flex justify-between text-xs text-[#5C5046] font-medium">
                            <span>Pasal 351 KUHP (Penganiayaan)</span>
                            <span>2 Perkara (17%)</span>
                        </div>
                        <div class="w-full bg-[#EFE9E2] h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#C2A388] h-full rounded-full" style="width: 16.6%"></div>
                        </div>
                    </div>

                    {{-- Item 4 --}}
                    <div class="space-y-1">
                        <div class="flex justify-between text-xs text-[#5C5046] font-medium">
                            <span>Pasal 372 KUHP (Penggelapan)</span>
                            <span>2 Perkara (17%)</span>
                        </div>
                        <div class="w-full bg-[#EFE9E2] h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#DDD5CC] h-full rounded-full" style="width: 16.6%"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Donut Chart: Komposisi Status Perkara --}}
            <div
                class="bg-warm-card p-6 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between space-y-4">
                <div>
                    <h3 class="text-sm font-semibold text-[#2D2723]">Status Persidangan</h3>
                    <p class="text-xs text-[#7A6E65] mt-0.5">Prosentase progres penanganan</p>
                </div>

                <div class="flex items-center justify-center py-2">
                    <div class="relative w-36 h-36 flex items-center justify-center">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                            {{-- Background Ring --}}
                            <path class="text-[#EFE9E2]" stroke-width="3.8" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            {{-- Segment Pembuktian (41.6%) --}}
                            <path class="text-[#8C6D53]" stroke-dasharray="41.6, 100" stroke-width="3.8"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            {{-- Segment Dakwaan (33.3%) --}}
                            <path class="text-[#A3856C]" stroke-dasharray="33.3, 100" stroke-dashoffset="-41.6"
                                stroke-width="3.8" stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            {{-- Segment Putusan (25%) --}}
                            <path class="text-[#C2A388]" stroke-dasharray="25, 100" stroke-dashoffset="-74.9"
                                stroke-width="3.8" stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <div class="absolute text-center">
                            <span class="text-xl font-bold text-[#2D2723]">12</span>
                            <span class="text-[10px] block text-[#7A6E65]">Perkara</span>
                        </div>
                    </div>
                </div>

                {{-- Chart Legend --}}
                <div class="grid grid-cols-3 gap-1 text-[11px] text-[#5C5046] pt-1 border-t border-warm-border">
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#8C6D53]"></span>
                        <span>Pembuktian</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#A3856C]"></span>
                        <span>Dakwaan</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#C2A388]"></span>
                        <span>Putusan</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Main Focus & Yurisprudensi Container --}}
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">

            {{-- Quick Action Upload & Perkara Utama (Col Span 3) --}}
            <div class="lg:col-span-3 space-y-5">
                {{-- Quick Action Upload --}}
                <div
                    class="bg-warm-card p-5 rounded-xl border border-warm-border shadow-sm flex items-center justify-between gap-4">
                    <div>
                        <h3 class="text-sm font-semibold text-[#2D2723]">Analisis Dokumen Dakwaan Baru</h3>
                        <p class="text-xs text-[#7A6E65] mt-1">Unggah berkas dakwaan (PDF/Docx) untuk memicu ekstraksi
                            pasal dan pertimbangan yurisprudensi.</p>
                    </div>
                    <button
                        class="px-4 py-2 bg-[#8C6D53] hover:bg-[#735842] text-white font-medium text-xs rounded-lg transition-colors shrink-0 flex items-center gap-2">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Upload Ringkasan</span>
                    </button>
                </div>

                {{-- Focus Card: Perkara Aktif --}}
                <div class="bg-warm-card p-6 rounded-xl border border-warm-border shadow-sm space-y-4">
                    <div class="flex items-center justify-between border-b border-warm-border pb-3">
                        <h3 class="text-sm font-semibold text-[#2D2723]">Perkara No. 128/Pid.B/2026/PN Plk</h3>
                        <span
                            class="text-xs px-2.5 py-0.5 rounded bg-[#EFE9E2] text-[#5C5046] font-medium border border-[#DDD5CC]">Tahap
                            Pembuktian</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div>
                            <span class="text-[#7A6E65]">Terdakwa:</span>
                            <p class="font-semibold text-[#2D2723] mt-0.5">Budi Santoso</p>
                        </div>
                        <div>
                            <span class="text-[#7A6E65]">Pasal Didakwakan:</span>
                            <p class="font-semibold text-[#2D2723] mt-0.5">Pasal 362 KUHP (Pencurian)</p>
                        </div>
                    </div>

                    <div class="p-3.5 bg-warm-bg rounded-lg border border-warm-border text-xs text-[#5C5046] space-y-1.5">
                        <p class="font-semibold text-[#2D2723]">Matriks Keterpenuhan Unsur (Simulasi AI):</p>
                        <p>• Unsur "Barang Siapa": <span class="font-semibold text-emerald-800">Terpenuhi</span></p>
                        <p>• Unsur "Mengambil barang milik orang lain": <span
                                class="font-semibold text-emerald-800">Terpenuhi (Sesuai BAP Saksi)</span></p>
                    </div>
                </div>
            </div>

            {{-- Side Focus: Yurisprudensi Terkait (Col Span 1) --}}
            <div class="bg-warm-card p-5 rounded-xl border border-warm-border shadow-sm flex flex-col justify-between">
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65] mb-3">Yurisprudensi Terkait
                    </h4>
                    <div class="space-y-3 text-xs">
                        <div class="p-3 rounded bg-warm-bg border border-warm-border">
                            <p class="font-medium text-[#2D2723]">Putusan MA No. 412/Pid/2022</p>
                            <p class="text-[11px] text-[#7A6E65] mt-1 leading-relaxed">Preseden pertimbangan unsur
                                penguasaan barang tanpa hak.</p>
                        </div>
                        <div class="p-3 rounded bg-warm-bg border border-warm-border">
                            <p class="font-medium text-[#2D2723]">Putusan MA No. 108/Pid/2024</p>
                            <p class="text-[11px] text-[#7A6E65] mt-1 leading-relaxed">Kriteria pembuktian saksi tunggal
                                pada tindak pidana ringan.</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="text-xs text-[#8C6D53] font-semibold hover:underline mt-4 block">Lihat Semua
                    Rujukan →</a>
            </div>

        </div>
    </div>
@endsection
