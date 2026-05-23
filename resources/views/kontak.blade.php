{{-- ============================================================
     KONTAK PAGE — UMKM Maritim Kepulauan Riau
     ============================================================ --}}

@php $title = 'Kontak'; @endphp

@include('partials.navbar')

{{-- Page Hero Mini --}}
<section class="page-hero-mini text-center" id="page-hero">
    <div class="container-wide relative z-10">
        <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-white/50 text-body-sm">
                <li><a href="/homepage" class="hover:text-white transition-colors">Beranda</a></li>
                <li><span class="text-white/25">/</span></li>
                <li><span class="text-[#0d9488] font-medium">Kontak</span></li>
            </ol>
        </nav>
        <span class="text-eyebrow text-[#0d9488] block mb-2">Hubungi Kami</span>
        <h1 class="text-display-xl text-white">Kami Siap Membantu</h1>
        <p class="text-body-lg text-white/60 mt-3 max-w-lg mx-auto">
            Punya pertanyaan, masukan, atau ingin menjalin kerja sama? Kami terbuka untuk semua komunikasi.
        </p>
    </div>
</section>

<main class="bg-white py-16 lg:py-20">
    <div class="container-wide">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 max-w-5xl mx-auto">

            {{-- Left: Info Kontak --}}
            <div>
                <span class="text-eyebrow text-[#0d9488] block mb-3">Informasi</span>
                <h2 class="text-display-lg text-[#0c1a24] mb-6">Cara Menghubungi Kami</h2>
                <p class="text-body-lg text-[#64748b] leading-relaxed mb-8">
                    Terima kasih telah mengunjungi UMKM Maritim Kepulauan Riau. Tim kami akan merespons
                    setiap pesan secepat mungkin pada hari kerja berikutnya.
                </p>

                {{-- Contact Cards --}}
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4 p-4 rounded-2xl border border-[#e2e8f0] hover:border-[#0d9488] hover:shadow-sm transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#ccfbf1] flex items-center justify-center flex-shrink-0 group-hover:bg-[#0d9488] transition-colors">
                            <i class="fa-solid fa-location-dot text-[#0d9488] group-hover:text-white transition-colors"></i>
                        </div>
                        <div>
                            <div class="text-caption text-[#94a3b8] mb-0.5">Alamat</div>
                            <div class="text-body-md text-[#0c1a24] font-medium">Jalan Senggarang, Kepulauan Riau</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl border border-[#e2e8f0] hover:border-[#0d9488] hover:shadow-sm transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#ccfbf1] flex items-center justify-center flex-shrink-0 group-hover:bg-[#0d9488] transition-colors">
                            <i class="fa-solid fa-phone text-[#0d9488] group-hover:text-white transition-colors"></i>
                        </div>
                        <div>
                            <div class="text-caption text-[#94a3b8] mb-0.5">Telepon</div>
                            <a href="tel:+628126xxxxxx" class="text-body-md text-[#0c1a24] font-medium hover:text-[#0d9488] transition-colors">
                                0812-6xxx-xxxx
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl border border-[#e2e8f0] hover:border-[#0d9488] hover:shadow-sm transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#ccfbf1] flex items-center justify-center flex-shrink-0 group-hover:bg-[#0d9488] transition-colors">
                            <i class="fa-solid fa-envelope text-[#0d9488] group-hover:text-white transition-colors"></i>
                        </div>
                        <div>
                            <div class="text-caption text-[#94a3b8] mb-0.5">Email</div>
                            <a href="mailto:umkmkepri@gmail.com" class="text-body-md text-[#0c1a24] font-medium hover:text-[#0d9488] transition-colors">
                                umkmkepri@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Jam Operasional --}}
                <div class="bg-[#f8fafc] rounded-2xl p-6 border border-[#e2e8f0]">
                    <div class="flex items-center gap-2 mb-4">
                        <i class="fa-solid fa-clock text-[#0d9488]"></i>
                        <span class="text-heading-sm text-[#0c1a24]">Jam Operasional</span>
                    </div>
                    <div class="space-y-2.5">
                        <div class="flex justify-between items-center">
                            <span class="text-body-sm text-[#64748b]">Senin – Jumat</span>
                            <span class="text-body-sm text-[#0c1a24] font-semibold">08.00 – 17.00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-body-sm text-[#64748b]">Sabtu</span>
                            <span class="text-body-sm text-[#0c1a24] font-semibold">09.00 – 13.00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-body-sm text-[#64748b]">Minggu & Hari Libur</span>
                            <span class="tag tag-coral text-[11px]">Tutup</span>
                        </div>
                    </div>
                    <p class="text-caption text-[#94a3b8] mt-4 leading-relaxed">
                        Di luar jam operasional, Anda tetap dapat mengirim pesan melalui form ini dan kami akan merespons pada hari kerja berikutnya.
                    </p>
                </div>
            </div>

            {{-- Right: Contact Form --}}
            <div>
                <span class="text-eyebrow text-[#0d9488] block mb-3">Form</span>
                <h2 class="text-display-lg text-[#0c1a24] mb-6">Kirim Pesan</h2>

                {{-- Success Alert --}}
                @if (session('success'))
                    <div class="alert-success mb-6 flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-[#059669]"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('kontak.kirim') }}"
                      method="POST"
                      class="space-y-5"
                      id="kontak-form"
                      novalidate>
                    @csrf

                    {{-- Nama --}}
                    <div>
                        <label for="nama" class="block text-caption text-[#64748b] mb-2 font-medium">
                            Nama Lengkap <span class="text-[#ef4444]">*</span>
                        </label>
                        <input type="text"
                               id="nama"
                               name="nama"
                               required
                               placeholder="Masukkan nama Anda"
                               class="input-field"
                               value="{{ old('nama') }}">
                        @error('nama')
                            <p class="text-caption text-[#ef4444] mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-caption text-[#64748b] mb-2 font-medium">
                            Alamat Email <span class="text-[#ef4444]">*</span>
                        </label>
                        <input type="email"
                               id="email"
                               name="email"
                               required
                               placeholder="nama@email.com"
                               class="input-field"
                               value="{{ old('email') }}">
                        @error('email')
                            <p class="text-caption text-[#ef4444] mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Subjek --}}
                    <div>
                        <label for="subjek" class="block text-caption text-[#64748b] mb-2 font-medium">
                            Subjek <span class="text-[#ef4444]">*</span>
                        </label>
                        <input type="text"
                               id="subjek"
                               name="subjek"
                               required
                               placeholder="Topik pesan Anda"
                               class="input-field"
                               value="{{ old('subjek') }}">
                        @error('subjek')
                            <p class="text-caption text-[#ef4444] mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Pesan --}}
                    <div>
                        <label for="pesan" class="block text-caption text-[#64748b] mb-2 font-medium">
                            Pesan <span class="text-[#ef4444]">*</span>
                        </label>
                        <textarea id="pesan"
                                  name="pesan"
                                  rows="5"
                                  required
                                  placeholder="Tulis pesan, pertanyaan, atau kebutuhan Anda di sini…"
                                  class="input-field resize-none">{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <p class="text-caption text-[#ef4444] mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                            id="submit-btn"
                            class="btn btn-primary w-full justify-center text-base py-4">
                        <span id="btn-text">
                            <i class="fa-solid fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </span>
                        <span id="btn-loading" class="hidden items-center gap-2">
                            <svg class="animate-spin w-4 h-4" viewBox="0 0 24 24" fill="none">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                            </svg>
                            Mengirim…
                        </span>
                    </button>

                </form>
            </div>

        </div>
    </div>
</main>

<script>
document.getElementById('kontak-form')?.addEventListener('submit', function() {
    const btn = document.getElementById('submit-btn');
    const text = document.getElementById('btn-text');
    const loading = document.getElementById('btn-loading');
    if (btn && text && loading) {
        btn.disabled = true;
        text.classList.add('hidden');
        loading.classList.remove('hidden');
        loading.classList.add('flex');
    }
});
</script>

@include('partials.footer')
