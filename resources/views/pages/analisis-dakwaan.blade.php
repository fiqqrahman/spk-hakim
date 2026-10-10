@extends('layouts.app')

@section('title', 'Analisis Dakwaan - SPK Hakim')

@section('content')
    <div class="w-full space-y-6" x-data="{
        showDetailModal: false,
        activeDetail: {
            noPerkara: '128/Pid.B/2026/PN Plk',
            terdakwa: 'Budi Santoso',
            pasal: 'Pasal 362 KUHP',
            status: 'Pembuktian',
            ringkasan: 'Terdakwa Budi Santoso didakwa mengambil 1 unit sepeda motor milik saksi korban pada tanggal 12 September 2026 tanpa izin dengan maksud untuk dimiliki secara melawan hukum.',
            unsur: [
                { nama: '1. Unsur &quot;Barang Siapa&quot;', status: 'Terpenuhi', ket: 'Identitas Terdakwa Budi Santoso sesuai BAP dan pembenaran saksi.' },
                { nama: '2. Unsur &quot;Mengambil Barang&quot;', status: 'Terpenuhi', ket: 'Penguasaan fisik sepeda motor berpindah tangan dikuatkan rekam CCTV.' }
            ]
        },
        openDetail(data) {
            this.activeDetail = data;
            this.showDetailModal = true;
        }
    }">
        {{-- Top Action Header & Filter --}}
        <div
            class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-base font-semibold text-[#2D2723]">Analisis & Ekstraksi Surat Dakwaan</h1>
                <p class="text-xs text-[#7A6E65] mt-0.5">Daftar perkara aktif beserta hasil analisis otomatis keterpenuhan
                    unsur pasal.</p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <div class="relative">
                    <input type="text" placeholder="Cari No. Perkara / Terdakwa..."
                        class="w-64 px-3.5 py-1.5 pl-9 text-xs bg-[#F4EFEB] border border-[#E5DED6] rounded-lg text-[#2D2723] placeholder-[#A39589] focus:outline-none focus:border-[#8C6D53] transition-colors">
                    <svg class="w-3.5 h-3.5 text-[#A39589] absolute left-3 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <select
                    class="px-3 py-1.5 text-xs bg-[#F4EFEB] border border-[#E5DED6] rounded-lg text-[#5C5046] focus:outline-none focus:border-[#8C6D53]">
                    <option value="">Semua Status</option>
                    <option value="pembuktian">Pembuktian</option>
                    <option value="dakwaan">Dakwaan</option>
                    <option value="putusan">Siap Putusan</option>
                </select>
                <button
                    class="px-4 py-1.5 bg-[#8C6D53] hover:bg-[#735842] text-white font-medium text-xs rounded-lg transition-colors flex items-center gap-2">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Upload Berkas Baru</span>
                </button>
            </div>
        </div>

        {{-- Main Container: Table & Active Item Detail Panel --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Table Section (Col Span 2) --}}
            <div
                class="lg:col-span-2 bg-[#FAF8F5] rounded-xl border border-[#E5DED6] shadow-sm overflow-hidden flex flex-col justify-between">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr
                                class="bg-[#F4EFEB] border-b border-[#E5DED6] text-[#7A6E65] uppercase font-semibold tracking-wider">
                                <th class="py-3 px-4">No. Perkara</th>
                                <th class="py-3 px-4">Terdakwa</th>
                                <th class="py-3 px-4">Pasal Primary</th>
                                <th class="py-3 px-4">Progres Unsur</th>
                                <th class="py-3 px-4 text-center">Status</th>
                                <th class="py-3 px-4 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E5DED6] text-[#2D2723]">
                            {{-- Row 1 --}}
                            <tr
                                class="bg-[#EFE9E2]/60 hover:bg-[#EFE9E2] transition-colors cursor-pointer border-l-4 border-l-[#8C6D53]">
                                <td class="py-3.5 px-4 font-semibold">128/Pid.B/2026/PN Plk</td>
                                <td class="py-3.5 px-4 font-medium">Budi Santoso</td>
                                <td class="py-3.5 px-4 text-[#7A6E65]">Pasal 362 KUHP</td>
                                <td class="py-3.5 px-4">
                                    <div class="flex items-center gap-2">
                                        <div class="w-20 bg-[#EFE9E2] h-2 rounded-full overflow-hidden">
                                            <div class="bg-[#8C6D53] h-full rounded-full" style="width: 100%"></div>
                                        </div>
                                        <span class="text-[11px] font-semibold text-emerald-800">2/2</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-center">
                                    <span
                                        class="px-2 py-0.5 text-[10px] rounded bg-[#EFE9E2] text-[#5C5046] font-medium border border-[#DDD5CC]">Pembuktian</span>
                                </td>
                                <td class="py-3.5 px-4 text-right">
                                    <button
                                        @click="openDetail({
                                    noPerkara: '128/Pid.B/2026/PN Plk',
                                    terdakwa: 'Budi Santoso',
                                    pasal: 'Pasal 362 KUHP',
                                    status: 'Pembuktian',
                                    ringkasan: 'Terdakwa Budi Santoso didakwa mengambil 1 unit sepeda motor milik saksi korban pada tanggal 12 September 2026 tanpa izin dengan maksud untuk dimiliki secara melawan hukum.',
                                    unsur: [
                                        { nama: '1. Unsur &quot;Barang Siapa&quot;', status: 'Terpenuhi', ket: 'Identitas Terdakwa Budi Santoso sesuai BAP dan pembenaran saksi.' },
                                        { nama: '2. Unsur &quot;Mengambil Barang&quot;', status: 'Terpenuhi', ket: 'Penguasaan fisik sepeda motor berpindah tangan dikuatkan rekam CCTV.' }
                                    ]
                                })"
                                        class="text-[#8C6D53] hover:underline font-semibold text-[11px]">Detail
                                        &rarr;</button>
                                </td>
                            </tr>
                            {{-- Row 2 --}}
                            <tr class="hover:bg-[#F4EFEB] transition-colors cursor-pointer">
                                <td class="py-3.5 px-4 font-semibold">130/Pid.B/2026/PN Plk</td>
                                <td class="py-3.5 px-4 font-medium">Siti Rahmawati</td>
                                <td class="py-3.5 px-4 text-[#7A6E65]">Pasal 378 KUHP</td>
                                <td class="py-3.5 px-4">
                                    <div class="flex items-center gap-2">
                                        <div class="w-20 bg-[#EFE9E2] h-2 rounded-full overflow-hidden">
                                            <div class="bg-[#A3856C] h-full rounded-full" style="width: 66%"></div>
                                        </div>
                                        <span class="text-[11px] font-medium text-[#7A6E65]">2/3</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-center">
                                    <span
                                        class="px-2 py-0.5 text-[10px] rounded bg-[#EFE9E2] text-[#5C5046] font-medium border border-[#DDD5CC]">Dakwaan</span>
                                </td>
                                <td class="py-3.5 px-4 text-right">
                                    <button
                                        @click="openDetail({
                                    noPerkara: '130/Pid.B/2026/PN Plk',
                                    terdakwa: 'Siti Rahmawati',
                                    pasal: 'Pasal 378 KUHP',
                                    status: 'Dakwaan',
                                    ringkasan: 'Terdakwa Siti Rahmawati didakwa melakukan bujuk rayu dan penipuan investasi bodong bernilai puluhan juta rupiah.',
                                    unsur: [
                                        { nama: '1. Unsur &quot;Barang Siapa&quot;', status: 'Terpenuhi', ket: 'Identitas Terdakwa sesuai dengan KTP dan BAP.' },
                                        { nama: '2. Unsur &quot;Dengan Maksud Menguntungkan Diri Sendiri&quot;', status: 'Terpenuhi', ket: 'Bukti transfer rekening menampung dana saksi korban.' },
                                        { nama: '3. Unsur &quot;Tipu Muslihat / Rangkaian Kebohongan&quot;', status: 'Proses', ket: 'Masih menunggu keterangan saksi ahli perbankan.' }
                                    ]
                                })"
                                        class="text-[#8C6D53] hover:underline font-semibold text-[11px]">Detail
                                        &rarr;</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- Table Pagination --}}
                <div
                    class="p-4 bg-[#FAF8F5] border-t border-[#E5DED6] flex items-center justify-between text-xs text-[#7A6E65]">
                    <span>Menampilkan 1-4 dari 12 Perkara</span>
                    <div class="flex items-center gap-1">
                        <button
                            class="px-2.5 py-1 bg-[#F4EFEB] border border-[#E5DED6] rounded hover:bg-[#EFE9E2]">Prev</button>
                        <button class="px-2.5 py-1 bg-[#8C6D53] text-white font-medium rounded">1</button>
                        <button
                            class="px-2.5 py-1 bg-[#F4EFEB] border border-[#E5DED6] rounded hover:bg-[#EFE9E2]">2</button>
                        <button
                            class="px-2.5 py-1 bg-[#F4EFEB] border border-[#E5DED6] rounded hover:bg-[#EFE9E2]">Next</button>
                    </div>
                </div>
            </div>

            {{-- Detail Side Panel (Col Span 1) --}}
            <div class="bg-[#FAF8F5] p-5 rounded-xl border border-[#E5DED6] shadow-sm space-y-5">
                <div class="border-b border-[#E5DED6] pb-3 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#8C6D53]">Detail Analisis
                            AI</span>
                        <h2 class="text-sm font-semibold text-[#2D2723]" x-text="'No. ' + activeDetail.noPerkara"></h2>
                    </div>
                    <span class="p-1 bg-[#EFE9E2] rounded text-[#8C6D53]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                </div>
                <div class="space-y-2 text-xs">
                    <span class="font-semibold text-[#7A6E65]">Ringkasan Pokok Dakwaan:</span>
                    <p class="text-[#5C5046] bg-[#F4EFEB] p-3 rounded-lg border border-[#E5DED6] leading-relaxed"
                        x-text="activeDetail.ringkasan"></p>
                </div>
                <div class="space-y-3">
                    <span class="text-xs font-semibold text-[#2D2723] block"
                        x-text="'Matriks Unsur ' + activeDetail.pasal + ':'"></span>
                    <template x-for="(u, index) in activeDetail.unsur" :key="index">
                        <div class="p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6] space-y-1">
                            <div class="flex items-center justify-between text-xs">
                                <span class="font-semibold text-[#2D2723]" x-text="u.nama"></span>
                                <span class="text-[10px] font-bold px-2 py-0.5 rounded"
                                    :class="u.status === 'Terpenuhi' ? 'text-emerald-800 bg-emerald-100' :
                                        'text-amber-800 bg-amber-100'"
                                    x-text="u.status"></span>
                            </div>
                            <p class="text-[11px] text-[#7A6E65]" x-text="u.ket"></p>
                        </div>
                    </template>
                </div>
                <div class="pt-2 border-t border-[#E5DED6]">
                    <button
                        class="w-full py-2 bg-[#8C6D53] hover:bg-[#735842] text-white text-xs font-medium rounded-lg transition-colors flex items-center justify-center gap-2">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>Cetak Pertimbangan Draft Putusan</span>
                    </button>
                </div>
            </div>
        </div>

        {{-- MODAL DETAIL PERKARA (POP-UP OVERLAY) --}}
        <div x-show="showDetailModal" x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-xs p-4"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="bg-[#FAF8F5] border border-[#E5DED6] rounded-xl shadow-xl w-full max-w-2xl overflow-hidden"
                @click.away="showDetailModal = false">

                {{-- Modal Header --}}
                <div class="px-6 py-4 bg-[#F4EFEB] border-b border-[#E5DED6] flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#8C6D53]">Detail Lengkap
                            Ekstraksi AI</span>
                        <h3 class="text-base font-bold text-[#2D2723]" x-text="'Perkara No. ' + activeDetail.noPerkara">
                        </h3>
                    </div>
                    <button @click="showDetailModal = false" class="text-[#7A6E65] hover:text-[#2D2723]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- Modal Body --}}
                <div class="p-6 space-y-5 max-h-[70vh] overflow-y-auto text-xs">
                    {{-- Meta Info Grid --}}
                    <div class="grid grid-cols-3 gap-4 p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6]">
                        <div>
                            <span class="text-[#7A6E65] block">Nama Terdakwa:</span>
                            <span class="font-semibold text-[#2D2723]" x-text="activeDetail.terdakwa"></span>
                        </div>
                        <div>
                            <span class="text-[#7A6E65] block">Pasal Utama:</span>
                            <span class="font-semibold text-[#2D2723]" x-text="activeDetail.pasal"></span>
                        </div>
                        <div>
                            <span class="text-[#7A6E65] block">Status Persidangan:</span>
                            <span class="font-semibold text-[#8C6D53]" x-text="activeDetail.status"></span>
                        </div>
                    </div>

                    {{-- Ringkasan Subtansial --}}
                    <div class="space-y-1.5">
                        <span class="font-semibold text-[#2D2723] block">Uraian Ringkasan Surat Dakwaan:</span>
                        <p class="text-[#5C5046] bg-[#F4EFEB] p-3 rounded-lg border border-[#E5DED6] leading-relaxed"
                            x-text="activeDetail.ringkasan"></p>
                    </div>

                    {{-- Matriks Keterpenuhan Unsur --}}
                    <div class="space-y-2">
                        <span class="font-semibold text-[#2D2723] block"
                            x-text="'Evaluasi Keterpenuhan ' + activeDetail.pasal + ':'"></span>
                        <div class="space-y-2">
                            <template x-for="(u, index) in activeDetail.unsur" :key="index">
                                <div class="p-3 bg-[#F4EFEB] rounded-lg border border-[#E5DED6] space-y-1">
                                    <div class="flex items-center justify-between">
                                        <span class="font-semibold text-[#2D2723]" x-text="u.nama"></span>
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded"
                                            :class="u.status === 'Terpenuhi' ? 'text-emerald-800 bg-emerald-100' :
                                                'text-amber-800 bg-amber-100'"
                                            x-text="u.status"></span>
                                    </div>
                                    <p class="text-[11px] text-[#7A6E65]" x-text="u.ket"></p>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- Modal Footer --}}
                <div class="px-6 py-3 bg-[#F4EFEB] border-t border-[#E5DED6] flex items-center justify-between">
                    <button @click="showDetailModal = false"
                        class="px-4 py-1.5 bg-[#E5DED6] hover:bg-[#DDD5CC] text-[#2D2723] font-medium rounded-lg transition-colors">
                        Tutup
                    </button>
                    <button
                        class="px-4 py-1.5 bg-[#8C6D53] hover:bg-[#735842] text-white font-medium rounded-lg transition-colors flex items-center gap-2">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>Cetak Draft Putusan</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
