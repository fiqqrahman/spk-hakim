<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - Sistem Pendukung Keputusan Hakim</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[#F4EFEB] text-[#2D2723] antialiased min-h-screen flex items-center justify-center p-4 lg:p-8">

    {{-- Main Container Card --}}
    <div
        class="w-full max-w-5xl bg-[#FAF8F5] border border-[#E5DED6] rounded-2xl shadow-xl overflow-hidden flex flex-col lg:flex-row min-h-[620px]">

        {{-- ================= SISI KIRI: GAMBER DEWI THEMIS & BRANDING ================= --}}
        <div
            class="relative flex-1 bg-[#1A1614] text-[#E5DED6] p-8 lg:p-12 flex flex-col justify-between overflow-hidden shrink">

            {{-- Background Subtle Radial Glow --}}
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(140,109,83,0.22),transparent_65%)] pointer-events-none z-10">
            </div>

            {{-- Image Asset Dewi Themis (Positioned Bottom Right as Art Backdrop) --}}
            <div
                class="absolute -bottom-6 -right-12 lg:-bottom-10 lg:-right-16 w-[320px] lg:w-[440px] pointer-events-none select-none z-0">
                <img src="{{ asset('images/dewi-themis.png') }}" alt="Dewi Themis"
                    class="w-full h-auto object-contain opacity-40 mix-blend-lighten filter brightness-90 contrast-110 drop-shadow-2xl">
                {{-- Fade Mask Overlay agar bagian bawah & kiri gambar menyatu mulus dengan warna background #1A1614 --}}
                <div class="absolute inset-0 bg-gradient-to-t from-[#1A1614] via-transparent to-transparent opacity-80">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#1A1614] via-transparent to-transparent opacity-60">
                </div>
            </div>

            {{-- Brand Badge Top --}}
            <div class="relative z-20 flex items-center gap-3">
                <div
                    class="w-10 h-10 rounded-lg bg-[#8C6D53] flex items-center justify-center text-white font-bold text-base shadow-md">
                    SH
                </div>
                <div>
                    <h1 class="text-sm font-bold text-[#F5F2EE] tracking-wider">SPK HAKIM</h1>
                    <p class="text-[10px] text-[#A39589] uppercase tracking-widest font-semibold">Pengadilan Negeri
                        Palangka Raya</p>
                </div>
            </div>

            {{-- Content / Quote Center --}}
            <div class="relative z-20 my-12 max-w-md space-y-4">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#2A2421]/90 backdrop-blur-xs border border-[#3D332D] text-[11px] text-[#C2A388]">
                    <svg class="w-3.5 h-3.5 text-[#8C6D53]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 6l3 1m0 0l-3 9a5 5 0 006 0l-3-9e0 0m0 0l3 1m2 2l3 1m0 0l-3 9a5 5 0 006 0l-3-9e0 0m0 0l3 1" />
                    </svg>
                    <span>Fiat Justitia Ruat Caelum</span>
                </div>
                <h2 class="text-2xl font-serif font-bold text-white leading-snug drop-shadow-sm">
                    Sistem Pendukung Keputusan Penanganan Perkara & Ekstraksi Dakwaan
                </h2>
                <p class="text-xs text-[#A39589] leading-relaxed">
                    Akses terintegrasi analisis keterpenuhan unsur pasal KUHP, penelusuran yurisprudensi Mahkamah Agung,
                    dan penyusunan draft pertimbangan hukum.
                </p>
            </div>

            {{-- Footer Info --}}
            <div
                class="relative z-20 text-[11px] text-[#7A6E65] border-t border-[#2A2421] pt-4 flex items-center justify-between">
                <span>&copy; {{ date('Y') }} Mahkamah Agung RI</span>
                <span class="text-[#8C6D53] font-medium">v2.4 Judicial Assistant</span>
            </div>
        </div>

        {{-- ================= SISI KANAN: AREA INPUT LOGIN ================= --}}
        <div
            class="w-full lg:w-[380px] xl:w-[420px] bg-[#FAF8F5] p-8 lg:p-10 flex flex-col justify-between shrink-0 border-t lg:border-t-0 lg:border-l border-[#E5DED6] z-20">

            <div class="my-auto space-y-6">
                {{-- Header Form --}}
                <div class="space-y-1.5">
                    <h3 class="text-lg font-bold text-[#2D2723]">Autentikasi Hakim</h3>
                    <p class="text-xs text-[#7A6E65]">Masukkan NIP dan kata sandi resmi untuk mengakses sistem.</p>
                </div>

                {{-- Status Session Alert --}}
                @if (session('status'))
                    <div
                        class="p-3 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg text-xs font-medium">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Form Login --}}
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    {{-- NIP / Username / Email --}}
                    <div class="space-y-1.5">
                        <label for="nip" class="block text-xs font-semibold text-[#5C5046]">NIP / Identitas
                            Pengguna</label>
                        <div class="relative">
                            <input id="nip" type="text" name="nip" value="{{ old('nip') }}" required
                                autofocus placeholder="Masukkan NIP Anda"
                                class="w-full px-3.5 py-2.5 pl-9 text-xs bg-[#F4EFEB] border border-[#E5DED6] rounded-lg text-[#2D2723] placeholder-[#A39589] focus:outline-none focus:border-[#8C6D53] focus:bg-white transition-all @error('nip') border-red-500 @enderror">
                            <svg class="w-4 h-4 text-[#A39589] absolute left-3 top-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        @error('nip')
                            <span class="text-[11px] text-red-600 block mt-1 font-medium">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="space-y-1.5" x-data="{ showPass: false }">
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-xs font-semibold text-[#5C5046]">Kata Sandi</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-[11px] text-[#8C6D53] hover:underline font-medium">Lupa sandi?</a>
                            @endif
                        </div>
                        <div class="relative">
                            <input id="password" :type="showPass ? 'text' : 'password'" name="password" required
                                placeholder="••••••••"
                                class="w-full px-3.5 py-2.5 pl-9 pr-9 text-xs bg-[#F4EFEB] border border-[#E5DED6] rounded-lg text-[#2D2723] placeholder-[#A39589] focus:outline-none focus:border-[#8C6D53] focus:bg-white transition-all @error('password') border-red-500 @enderror">
                            <svg class="w-4 h-4 text-[#A39589] absolute left-3 top-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <button type="button" @click="showPass = !showPass"
                                class="absolute right-3 top-3 text-[#A39589] hover:text-[#2D2723] focus:outline-none">
                                <svg x-show="!showPass" class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg x-show="showPass" class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a8.88 8.88 0 013.682-.782c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <span class="text-[11px] text-red-600 block mt-1 font-medium">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center justify-between pt-1">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="remember"
                                class="w-3.5 h-3.5 text-[#8C6D53] border-[#E5DED6] rounded bg-[#F4EFEB] focus:ring-0 focus:ring-offset-0 accent-[#8C6D53]">
                            <span class="text-xs text-[#7A6E65]">Ingat sesi login saya</span>
                        </label>
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit"
                        class="w-full py-2.5 bg-[#8C6D53] hover:bg-[#735842] active:bg-[#5C4533] text-white font-semibold text-xs rounded-lg transition-colors shadow-sm flex items-center justify-center gap-2 cursor-pointer mt-2">
                        <span>Masuk ke Dashboard</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>

            {{-- Footer Help Contact --}}
            <div class="pt-6 border-t border-[#E5DED6] text-center text-[11px] text-[#A39589]">
                Kendala akses akun? Hubungi <a href="#" class="text-[#8C6D53] hover:underline font-medium">Tim
                    IT Pengadilan</a>
            </div>
        </div>

    </div>

</body>

</html>
