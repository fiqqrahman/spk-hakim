@extends('layouts.app')

@section('title', 'Dashboard Perkara - SPK Hakim')

@section('content')
    <div class="max-w-7xl mx-auto space-y-6">

        {{-- Bento Grid Container --}}
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5">

            {{-- Bento Item 1: Stat Summary (Col Span 1) --}}
            <div class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm flex flex-col justify-between">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65]">Perkara Aktif</span>
                <div class="mt-4">
                    <span class="text-3xl font-bold text-[#2D2723]">12</span>
                    <span class="text-xs text-[#8C6D53] ml-2">Perkara bulan ini</span>
                </div>
            </div>

            {{-- Bento Item 2: Upload Quick Access (Col Span 3) --}}
            <div
                class="md:col-span-2 lg:col-span-3 bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-semibold text-[#2D2723]">Analisis Dokumen Dakwaan Baru</h3>
                    <p class="text-xs text-[#7A6E65] mt-1">Unggah berkas dakwaan (PDF/Docx) untuk memicu ekstraksi pasal dan
                        pertimbangan yurisprudensi.</p>
                </div>
                <button
                    class="px-4 py-2 bg-[#8C6D53] hover:bg-[#735842] text-white font-medium text-xs rounded-lg transition-colors shrink-0">
                    + Upload Ringkasan
                </button>
            </div>

            {{-- Bento Item 3: Main Focus - Perkara Hari Ini (Col Span 3, Row Span 2) --}}
            <div
                class="md:col-span-3 lg:col-span-3 bg-[#FAF8F5] p-6 rounded-xl border border-[#E5DED6] shadow-sm space-y-4">
                <div class="flex items-center justify-between border-b border-[#E5DED6] pb-3">
                    <h3 class="text-sm font-semibold text-[#2D2723]">Perkara No. 128/Pid.B/2026/PN Plk</h3>
                    <span
                        class="text-xs px-2.5 py-0.5 rounded bg-[#EFE9E2] text-[#5C5046] font-medium border border-[#DDD5CC]">Tahap
                        Pembuktian</span>
                </div>

                <div class="grid grid-cols-2 gap-4 text-xs">
                    <div>
                        <span class="text-[#7A6E65]">Terdakwa:</span>
                        <p class="font-semibold text-[#2D2723] mt-0.5">Budi Santoso</p>
                    </div>
                    <div>
                        <span class="text-[#7A6E65]">Pasal Didakwakan:</span>
                        <p class="font-semibold text-[#2D2723] mt-0.5">Pasal 362 KUHP (Pencurian)</p>
                    </div>
                </div>

                <div class="p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6] text-xs text-[#5C5046] space-y-1">
                    <p class="font-semibold text-[#2D2723]">Matriks Keterpenuhan Unsur (Simulasi AI):</p>
                    <p>• Unsur "Barang Siapa": <span class="font-semibold text-emerald-800">Terpenuhi</span></p>
                    <p>• Unsur "Mengambil barang milik orang lain": <span class="font-semibold text-emerald-800">Terpenuhi
                            (Sesuai BAP Saksi)</span></p>
                </div>
            </div>

            {{-- Bento Item 4: Yurisprudensi Rujukan (Col Span 1, Row Span 2) --}}
            <div class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm flex flex-col justify-between">
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-wider text-[#7A6E65] mb-3">Yurisprudensi Terkait
                    </h4>
                    <div class="space-y-3 text-xs">
                        <div class="p-2.5 rounded bg-[#F4EFEB] border border-[#E5DED6]">
                            <p class="font-medium text-[#2D2723]">Putusan MA No. 412/Pid/2022</p>
                            <p class="text-[11px] text-[#7A6E65] mt-1">Preseden pertimbangan unsur penguasaan barang tanpa
                                hak.</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="text-xs text-[#8C6D53] font-semibold hover:underline mt-4 block">Lihat Semua
                    Rujukan →</a>
            </div>

        </div>
    </div>
@endsection
