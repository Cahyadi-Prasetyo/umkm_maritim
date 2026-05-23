{{-- ============================================================
     HOMEPAGE — UMKM Maritim Kepulauan Riau
     Design: Bahari Moderne
     ============================================================ --}}

@php $title = 'homepage'; @endphp

@include('partials.navbar')

{{-- Mark body as has-hero for navbar transparency --}}
<script>document.body.classList.add('has-hero');</script>

{{-- ====================================================
     HERO SECTION — Full dark cinematic band
     ==================================================== --}}
<section class="hero-band min-h-[92vh] flex flex-col justify-center relative" id="hero">

    {{-- Decorative: Dot Grid Pattern --}}
    <div class="absolute inset-0 opacity-[0.04]" aria-hidden="true"
         style="background-image: radial-gradient(circle, #0d9488 1px, transparent 1px); background-size: 32px 32px;">
    </div>

    {{-- Decorative: Gradient Orbs --}}
    <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #0d9488 0%, transparent 70%);" aria-hidden="true"></div>
    <div class="absolute bottom-[10%] left-[-8%] w-[400px] h-[400px] rounded-full opacity-8 pointer-events-none"
         style="background: radial-gradient(circle, #0f766e 0%, transparent 70%);" aria-hidden="true"></div>

    <div class="container-wide relative z-10 pt-8 pb-16">
        <div class="max-w-4xl mx-auto text-center">

            {{-- Eyebrow Tag --}}
            <div class="flex justify-center mb-6 animate-fade-up">
                <span class="tag tag-teal">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#0d9488] mr-2"></span>
                    Produk Lokal Kepulauan Riau
                </span>
            </div>

            {{-- Hero Headline --}}
            <h1 class="text-display-xxl text-white mb-5 animate-fade-up animate-delay-100"
                style="letter-spacing: -0.035em;">
                Produk Maritim Terbaik<br class="hidden sm:block">
                <span class="text-[#0d9488]">dari Pesisir Kepri</span>
            </h1>

            {{-- Hero Subtitle --}}
            <p class="text-body-lg text-white/65 max-w-2xl mx-auto mb-10 animate-fade-up animate-delay-200">
                Temukan kuliner autentik, hasil laut segar, dan aksesoris khas dari para pelaku UMKM maritim Kepulauan Riau — langsung ke tanganmu.
            </p>

            {{-- Search Bar (Airbnb-style) --}}
            <div class="max-w-2xl mx-auto mb-8 animate-fade-up animate-delay-300">
                <form method="GET" action="{{ route('home') }}" role="search">
                    <div class="search-pill" style="padding: 4px;">
                        <input type="search"
                               id="hero-search"
                               name="search"
                               value="{{ $search ?? '' }}"
                               autocomplete="off"
                               placeholder="Cari produk maritim…"
                               aria-label="Cari produk"
                               class="flex-1 px-5 py-3 bg-transparent border-none outline-none text-[#0c1a24] placeholder-[#94a3b8] text-base font-medium">
                        <button type="submit" class="search-orb flex-shrink-0 mr-1" aria-label="Cari">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 animate-fade-up animate-delay-400">
                <a href="/kuliner" class="btn btn-primary btn-lg w-full sm:w-auto">
                    <i class="fa-solid fa-store mr-2"></i>
                    Jelajahi Produk
                </a>
                <a href="/tentangkami" class="btn btn-outline-white btn-lg w-full sm:w-auto">
                    Tentang Kami
                    <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>

        </div>
    </div>

    {{-- Wave Bottom --}}
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-none" aria-hidden="true">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-14 sm:h-20">
            <path d="M0,40 C180,80 360,0 540,40 C720,80 900,0 1080,40 C1260,80 1350,20 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

{{-- ====================================================
     STATS STRIP
     ==================================================== --}}
<section class="bg-white py-8 border-b border-[#e2e8f0]">
    <div class="container-wide">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <div class="text-display-lg text-[#0d9488] font-bold">50+</div>
                <div class="text-body-sm text-[#64748b] mt-1">Produk UMKM</div>
            </div>
            <div>
                <div class="text-display-lg text-[#0d9488] font-bold">3</div>
                <div class="text-body-sm text-[#64748b] mt-1">Kategori</div>
            </div>
            <div>
                <div class="text-display-lg text-[#0d9488] font-bold">10+</div>
                <div class="text-body-sm text-[#64748b] mt-1">Wilayah Kepri</div>
            </div>
            <div>
                <div class="text-display-lg text-[#0d9488] font-bold">100%</div>
                <div class="text-body-sm text-[#64748b] mt-1">Produk Lokal</div>
            </div>
        </div>
    </div>
</section>

{{-- ====================================================
     PRODUK PILIHAN — Section heading + Carousel
     ==================================================== --}}
<section class="bg-white py-16" id="produk-pilihan">
    <div class="container-wide">

        {{-- Section Header --}}
        <div class="text-center mb-10">
            <span class="text-eyebrow text-[#0d9488] block mb-2">Unggulan Kami</span>
            <h2 class="text-display-xl text-[#0c1a24]">Produk Pilihan Hari Ini</h2>
            <p class="text-body-lg text-[#64748b] mt-3 max-w-xl mx-auto">
                Setiap hari kami tampilkan produk UMKM terbaik dari Kepulauan Riau
            </p>
        </div>

        {{-- Carousel --}}
        @if(!empty($produk_result) && count($produk_result) > 0)
        <div id="main-carousel" class="relative max-w-4xl mx-auto overflow-hidden rounded-2xl shadow-xl" data-carousel="slide">

            {{-- Slides --}}
            <div class="relative h-[300px] sm:h-[400px] overflow-hidden rounded-2xl">
                @foreach($produk_result as $index => $item)
                <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                    <div class="relative h-[300px] sm:h-[400px] w-full">
                        <img src="{{ asset($item['gambar']) }}"
                             alt="{{ $item['judul'] }}"
                             class="w-full h-full object-cover">
                        {{-- Gradient Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        {{-- Caption --}}
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <span class="tag tag-teal mb-2">Produk Pilihan</span>
                            <h3 class="text-white text-heading-lg font-semibold">{{ $item['judul'] }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Prev Button --}}
            <button type="button"
                    class="carousel-btn absolute left-3 top-1/2 -translate-y-1/2 z-30"
                    data-carousel-prev aria-label="Slide sebelumnya">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 19-7-7 7-7"/>
                </svg>
            </button>

            {{-- Next Button --}}
            <button type="button"
                    class="carousel-btn absolute right-3 top-1/2 -translate-y-1/2 z-30"
                    data-carousel-next aria-label="Slide selanjutnya">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7"/>
                </svg>
            </button>

            {{-- Indicators --}}
            <div class="absolute bottom-4 right-6 z-30 flex gap-2">
                @foreach($produk_result as $index => $item)
                <button type="button"
                        class="w-2 h-2 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-white w-6' : 'bg-white/40' }}"
                        aria-label="Slide {{ $index + 1 }}"
                        data-carousel-slide-to="{{ $index }}">
                </button>
                @endforeach
            </div>

        </div>
        @endif

    </div>
</section>

{{-- ====================================================
     PRODUK SECTION — Main product listing or search results
     ==================================================== --}}
<section class="section-soft py-16" id="produk">
    <div class="container-wide">

        @if(empty($search))

            {{-- Normal: Alternating editorial layout --}}
            <div class="text-center mb-12">
                <span class="text-eyebrow text-[#0d9488] block mb-2">Semua Produk</span>
                <h2 class="text-display-xl text-[#0c1a24]">Dari Pesisir ke Tanganmu</h2>
            </div>

            <div class="space-y-16 max-w-5xl mx-auto">
                @foreach ($produk_full as $index => $item)
                <div class="group grid md:grid-cols-2 gap-8 lg:gap-12 items-center">

                    {{-- Image --}}
                    <div class="{{ $loop->iteration % 2 === 0 ? 'md:order-2' : '' }} overflow-hidden rounded-2xl">
                        <img src="{{ asset($item['gambar']) }}"
                             alt="{{ $item['judul'] }}"
                             class="w-full h-64 sm:h-72 object-cover rounded-2xl transition-transform duration-500 group-hover:scale-[1.03]">
                    </div>

                    {{-- Content --}}
                    <div class="{{ $loop->iteration % 2 === 0 ? 'md:order-1' : '' }}">
                        <span class="tag tag-teal mb-3">
                            @if($loop->iteration % 3 === 1) Kuliner
                            @elseif($loop->iteration % 3 === 2) Hasil Laut
                            @else Aksesoris
                            @endif
                        </span>
                        <h3 class="text-heading-lg text-[#0c1a24] mt-2 mb-3">{{ $item['judul'] }}</h3>
                        <p class="text-body-md text-[#64748b] leading-relaxed mb-5">{{ $item['deskripsi'] }}</p>
                        <a href="/kuliner" class="btn btn-outline-teal btn-sm">
                            Lihat Produk <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                        </a>
                    </div>

                </div>
                @endforeach
            </div>

        @else

            {{-- Search Results --}}
            <div class="mb-8">
                <h2 class="text-display-lg text-[#0c1a24]">
                    Hasil untuk <span class="text-[#0d9488]">"{{ $search }}"</span>
                </h2>
                <p class="text-body-md text-[#64748b] mt-1">{{ $produk_result->count() }} produk ditemukan</p>
            </div>

            @if($produk_result->isEmpty())
                <div class="text-center py-24">
                    <div class="text-6xl mb-4">🔍</div>
                    <h3 class="text-heading-lg text-[#0c1a24] mb-2">Produk tidak ditemukan</h3>
                    <p class="text-body-md text-[#64748b] mb-6">
                        Tidak ada produk yang cocok dengan "<strong>{{ $search }}</strong>"
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Lihat Semua Produk</a>
                </div>
            @else
                <div class="product-grid">
                    @foreach ($produk_result as $index => $item)
                    <div class="card-product group overflow-hidden">
                        {{-- Image --}}
                        <div class="overflow-hidden">
                            <img src="{{ asset($item['gambar']) }}"
                                 alt="{{ $item['judul'] }}"
                                 class="card-img">
                        </div>

                        {{-- Info --}}
                        <div class="p-5">
                            <h4 class="text-heading-md text-[#0c1a24] mb-2 line-clamp-1">{{ $item['judul'] }}</h4>

                            <div class="flex items-center gap-1.5 mb-2">
                                <i class="fa-solid fa-location-dot text-[#0d9488] text-xs"></i>
                                <span class="text-body-sm text-[#64748b]">{{ $item['lokasi'] ?? 'Kepulauan Riau' }}</span>
                            </div>

                            <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0]">
                                <span class="text-[#f59e0b] font-semibold text-base">
                                    Rp {{ number_format($item['harga'] ?? 0, 0, ',', '.') }}
                                </span>
                                <a href="{{ route('wa.kuliner', ['id' => $item['id']]) }}"
                                   class="btn btn-wa btn-sm" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i> Pesan
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif

        @endif

    </div>
</section>

{{-- ====================================================
     CTA BAND — Call to action bottom
     ==================================================== --}}
<section class="hero-band py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.04]"
         style="background-image: radial-gradient(circle, #0d9488 1px, transparent 1px); background-size: 28px 28px;"
         aria-hidden="true"></div>
    <div class="container-wide relative z-10 text-center">
        <span class="text-eyebrow text-[#0d9488] block mb-3">Bergabung Bersama Kami</span>
        <h2 class="text-display-xl text-white mb-4">Punya Produk Maritim?</h2>
        <p class="text-body-lg text-white/65 max-w-lg mx-auto mb-8">
            Daftarkan produk UMKM Anda dan jangkau lebih banyak pelanggan dari seluruh Indonesia.
        </p>
        <a href="/kontak" class="btn btn-primary btn-lg">
            Hubungi Kami <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
        </a>
    </div>
</section>

@include('partials.footer')