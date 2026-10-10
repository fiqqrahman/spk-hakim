{{-- Container Toast Floating di Layer Atas Kanan Container Utama --}}
<div class="absolute top-4 right-6 z-50 pointer-events-none">
    <div id="custom-toast"
        class="hidden opacity-0 translate-y-2 pointer-events-auto max-w-sm transition-all duration-300 ease-out">
        <div
            class="flex items-center justify-between gap-3 p-3.5 bg-[#FAF8F5] border-l-4 border-[#8C6D53] border-y border-r border-[#E5DED6] rounded-r-lg shadow-md text-xs text-[#2D2723]">
            <div class="flex items-center gap-2.5 min-w-0">
                <svg class="w-4 h-4 text-[#8C6D53] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span id="toast-message" class="truncate font-medium">Dokumen Dakwaan Perkara No. 128/Pid.B/2026/PN Plk
                    berhasil diekstraksi.</span>
            </div>
            <button onclick="hideToast()"
                class="text-[#A39589] hover:text-[#2D2723] focus:outline-none shrink-0 p-0.5 rounded hover:bg-[#EFE9E2] transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    let toastTimeout = null;

    function showToast(message = null, duration = 10000) {
        const toast = document.getElementById('custom-toast');
        const msgEl = document.getElementById('toast-message');

        if (message && msgEl) {
            msgEl.textContent = message;
        }

        if (toast) {
            if (toastTimeout) clearTimeout(toastTimeout);

            toast.classList.remove('hidden');
            // Trigger transition setelah unhide
            requestAnimationFrame(() => {
                toast.classList.remove('opacity-0', 'translate-y-2');
                toast.classList.add('opacity-100', 'translate-y-0');
            });

            if (duration > 0) {
                toastTimeout = setTimeout(() => {
                    hideToast();
                }, duration);
            }
        }
    }

    function hideToast() {
        const toast = document.getElementById('custom-toast');
        if (toast) {
            toast.classList.remove('opacity-100', 'translate-y-0');
            toast.classList.add('opacity-0', 'translate-y-2');

            // Sembunyikan dari DOM setelah animasi fade-out selesai
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 300);
        }
    }
</script>
