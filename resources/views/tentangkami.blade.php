{{-- ============================================================
     TENTANG KAMI PAGE — UMKM Maritim Kepulauan Riau
     ============================================================ --}}

@php $title = 'Tentang Kami'; @endphp

@include('partials.navbar')

{{-- Page Hero Mini --}}
<section class="page-hero-mini text-center" id="page-hero">
    <div class="container-wide relative z-10">
        <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-white/50 text-body-sm">
                <li><a href="/homepage" class="hover:text-white transition-colors">Beranda</a></li>
                <li><span class="text-white/25">/</span></li>
                <li><span class="text-[#0d9488] font-medium">Tentang Kami</span></li>
            </ol>
        </nav>
        <span class="text-eyebrow text-[#0d9488] block mb-2">Mengenal Kami</span>
        <h1 class="text-display-xl text-white">Tentang UMKM Maritim</h1>
        <p class="text-body-lg text-white/60 mt-3 max-w-lg mx-auto">
            Kisah kami dimulai dari semangat pesisir — membawa produk lokal ke pasar yang lebih luas.
        </p>
    </div>
</section>

<main class="bg-white">

    {{-- ===== About Section ===== --}}
    <section class="py-16 lg:py-20">
        <div class="container-wide">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-eyebrow text-[#0d9488] block mb-3">Siapa Kami</span>
                <h2 class="text-display-lg text-[#0c1a24] mb-6">Platform Digital Produk Maritim</h2>
                <p class="text-body-lg text-[#64748b] leading-relaxed">
                    Kami adalah sekelompok pengembang yang merancang platform ini sebagai wadah e-commerce untuk
                    memperkenalkan dan memasarkan produk dari pelaku UMKM di sektor maritim Kepulauan Riau.
                    Terinspirasi oleh kekayaan laut dan budaya bahari, kami hadir untuk mengangkat potensi lokal
                    agar mampu bersaing di pasar nasional maupun internasional.
                </p>
            </div>

            {{-- Feature Cards (Notion-inspired pastel tints) --}}
            <div class="grid sm:grid-cols-3 gap-5 mb-16">
                <div class="rounded-2xl p-7" style="background: #ccfbf1;">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background: rgba(13,148,136,0.12);">
                        <i class="fa-solid fa-anchor text-[#0d9488]"></i>
                    </div>
                    <h3 class="text-heading-md text-[#0c1a24] mb-2">Akar Maritim</h3>
                    <p class="text-body-sm text-[#1e3a4a] leading-relaxed">
                        Setiap produk kami berakar pada kearifan lokal pesisir — dari tangan nelayan hingga pengrajin pantai.
                    </p>
                </div>
                <div class="rounded-2xl p-7" style="background: #fef3c7;">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background: rgba(245,158,11,0.12);">
                        <i class="fa-solid fa-handshake text-[#d97706]"></i>
                    </div>
                    <h3 class="text-heading-md text-[#0c1a24] mb-2">Pemberdayaan UMKM</h3>
                    <p class="text-body-sm text-[#1e3a4a] leading-relaxed">
                        Mendorong digitalisasi dan memperluas jangkauan pasar bagi pelaku usaha kecil pesisir Kepri.
                    </p>
                </div>
                <div class="rounded-2xl p-7" style="background: #e0f2fe;">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background: rgba(14,165,233,0.12);">
                        <i class="fa-solid fa-leaf text-[#0ea5e9]"></i>
                    </div>
                    <h3 class="text-heading-md text-[#0c1a24] mb-2">Ramah Lingkungan</h3>
                    <p class="text-body-sm text-[#1e3a4a] leading-relaxed">
                        Proses produksi yang menghormati kelestarian laut dan ekosistem bahari Kepulauan Riau.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- ===== Visi Misi + Tim ===== --}}
    <section class="section-soft py-16 lg:py-20">
        <div class="container-wide">
            <div class="grid md:grid-cols-2 gap-10 lg:gap-16 items-start">

                {{-- Visi & Misi --}}
                <div>
                    <span class="text-eyebrow text-[#0d9488] block mb-4">Arah & Tujuan</span>
                    <h2 class="text-display-lg text-[#0c1a24] mb-8">Visi & Misi</h2>

                    {{-- Visi --}}
                    <div class="mb-7">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 rounded-lg bg-[#0d9488] flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-eye text-white text-xs"></i>
                            </div>
                            <h3 class="text-heading-md text-[#0c1a24]">Visi</h3>
                        </div>
                        <p class="text-body-md text-[#64748b] leading-relaxed pl-11">
                            Menjadi pelaku usaha maritim lokal yang berdaya saing tinggi, berkelanjutan, dan menjadi inspirasi
                            dalam pelestarian budaya bahari Kepulauan Riau.
                        </p>
                    </div>

                    {{-- Misi --}}
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 rounded-lg bg-[#0f766e] flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-bullseye text-white text-xs"></i>
                            </div>
                            <h3 class="text-heading-md text-[#0c1a24]">Misi</h3>
                        </div>
                        <ul class="space-y-3 pl-11">
                            @foreach([
                                'Mengangkat potensi hasil laut Kepulauan Riau melalui produk berkualitas tinggi.',
                                'Meningkatkan kesejahteraan masyarakat pesisir melalui pemberdayaan ekonomi lokal.',
                                'Menjaga kelestarian laut dengan proses produksi yang ramah lingkungan.',
                                'Mendorong digitalisasi dan pemasaran produk lokal ke pasar yang lebih luas.',
                            ] as $misi)
                            <li class="flex items-start gap-3">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#0d9488] mt-2.5 flex-shrink-0"></span>
                                <span class="text-body-md text-[#64748b] leading-relaxed">{{ $misi }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Tim --}}
                <div>
                    <span class="text-eyebrow text-[#0d9488] block mb-4">Pengembang</span>
                    <h2 class="text-display-lg text-[#0c1a24] mb-6">Tim Kami</h2>
                    <div class="overflow-hidden rounded-2xl border border-[#e2e8f0] shadow-sm">
                        <img src="{{ asset('images/WhatsApp Image 2025-06-03 at 17.29.52_35bb1fc2.jpg') }}"
                             alt="Tim Pengembang UMKM Maritim"
                             class="w-full h-64 sm:h-72 object-cover block"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="hidden w-full h-64 bg-[#f0f9ff] items-center justify-center text-[#0d9488] flex-col gap-3">
                            <i class="fa-solid fa-users text-4xl opacity-40"></i>
                            <span class="text-body-sm opacity-60">Foto Tim</span>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center gap-3 p-4 bg-white rounded-xl border border-[#e2e8f0]">
                        <div class="w-10 h-10 rounded-full bg-[#ccfbf1] flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-code text-[#0d9488] text-sm"></i>
                        </div>
                        <div>
                            <div class="text-heading-sm text-[#0c1a24]">Cahyadi Prasetyo</div>
                            <div class="text-body-sm text-[#64748b]">Lead Developer & Designer</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== CTA ===== --}}
    <section class="hero-band py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04]"
             style="background-image: radial-gradient(circle, #0d9488 1px, transparent 1px); background-size: 28px 28px;"
             aria-hidden="true"></div>
        <div class="container-wide relative z-10 text-center">
            <h2 class="text-display-lg text-white mb-4">Siap Bergabung?</h2>
            <p class="text-body-lg text-white/65 max-w-md mx-auto mb-8">
                Daftarkan produk UMKM Anda dan jangkau pasar lebih luas bersama kami.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="/kontak" class="btn btn-primary btn-lg">Hubungi Kami</a>
                <a href="/kuliner" class="btn btn-outline-white btn-lg">Lihat Produk</a>
            </div>
        </div>
    </section>

</main>

@include('partials.footer')
