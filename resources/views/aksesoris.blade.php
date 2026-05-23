{{-- ============================================================
     AKSESORIS PAGE — UMKM Maritim Kepulauan Riau
     ============================================================ --}}

@php $title = 'Aksesoris'; @endphp

@include('partials.navbar')

{{-- Page Hero Mini --}}
<section class="page-hero-mini text-center" id="page-hero">
    <div class="container-wide relative z-10">
        <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-white/50 text-body-sm">
                <li><a href="/homepage" class="hover:text-white transition-colors">Beranda</a></li>
                <li><span class="text-white/25">/</span></li>
                <li><span class="text-[#0d9488] font-medium">Aksesoris</span></li>
            </ol>
        </nav>
        <span class="text-eyebrow text-[#0d9488] block mb-2">Produk Kami</span>
        <h1 class="text-display-xl text-white">Aksesoris Khas Kepri</h1>
        <p class="text-body-lg text-white/60 mt-3 max-w-lg mx-auto">
            Kerajinan tangan dan aksesoris maritim khas Kepulauan Riau — karya asli para pengrajin lokal.
        </p>
    </div>
</section>

<main class="bg-[#f8fafc] py-12">
    <div class="container-wide">

        @if(count($aksesoriss) > 0)
        <div class="product-grid">
            @foreach ($aksesoriss as $index => $aksesoris)
            <div class="card-product card-order group" id="aksesoris-card-{{ $index }}">

                <div class="relative overflow-hidden">
                    <div class="absolute top-3 left-3 z-20">
                        <input id="checkbox-{{ $index }}"
                               type="checkbox"
                               name="selected_aksesoriss[]"
                               value="{{ $aksesoris['id'] }}"
                               class="checkbox-custom"
                               onclick="handleCheckboxClick(this, {{ $index }})">
                    </div>
                    <div class="absolute top-3 right-3 z-20">
                        <span class="tag tag-amber text-[11px]">Aksesoris</span>
                    </div>
                    <img src="{{ asset($aksesoris['gambar']) }}"
                         alt="{{ $aksesoris['judul'] }}"
                         class="card-img"
                         loading="lazy">
                </div>

                <div class="p-5 space-y-3">
                    <h3 class="text-heading-md text-[#0c1a24] line-clamp-2" data-product-name>
                        {{ $aksesoris['judul'] }}
                    </h3>

                    <div class="flex items-center gap-1.5" data-product-location>
                        <i class="fa-solid fa-location-dot text-[#0d9488] text-xs flex-shrink-0"></i>
                        <span class="text-body-sm text-[#64748b] line-clamp-1">{{ $aksesoris['lokasi'] }}</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-[#f59e0b] font-bold text-lg"
                              data-price="{{ $aksesoris['harga'] }}">
                            Rp {{ number_format($aksesoris['harga'], 0, ',', '.') }}
                        </span>
                    </div>

                    <form action="{{ route('wa.aksesoris', ['id' => $aksesoris['id']]) }}"
                          method="GET"
                          class="flex items-center justify-between gap-3 pt-3 border-t border-[#e2e8f0]">
                        <div class="flex items-center gap-2">
                            <label class="text-caption text-[#64748b]">Jml:</label>
                            <input type="number"
                                   name="jumlah"
                                   value="1"
                                   min="1"
                                   max="99"
                                   class="qty-input order-input"
                                   data-price="{{ $aksesoris['harga'] }}"
                                   oninput="updateTotal(this)">
                            <span class="total-price text-body-sm text-[#0c1a24] font-semibold">
                                Rp {{ number_format($aksesoris['harga'], 0, ',', '.') }}
                            </span>
                        </div>
                        <button type="submit" class="btn btn-wa btn-sm flex-shrink-0">
                            <i class="fa-brands fa-whatsapp"></i>
                            Pesan
                        </button>
                    </form>
                </div>

            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-24">
            <div class="text-6xl mb-4">💎</div>
            <h3 class="text-heading-lg text-[#0c1a24] mb-2">Belum ada produk aksesoris</h3>
            <p class="text-body-md text-[#64748b]">Produk akan segera hadir</p>
        </div>
        @endif

        <div id="wa-button-container" class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50 hidden">
            <a id="wa-button" href="#" target="_blank" class="wa-float" rel="noopener">
                <i class="fa-brands fa-whatsapp text-xl"></i>
                <span>Pesan Produk Terpilih via WA</span>
            </a>
        </div>

    </div>
</main>

@include('partials.footer')