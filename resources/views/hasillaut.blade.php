{{-- ============================================================
     HASIL LAUT PAGE — UMKM Maritim Kepulauan Riau
     ============================================================ --}}

@php $title = 'Hasil Laut'; @endphp

@include('partials.navbar')

{{-- Page Hero Mini --}}
<section class="page-hero-mini text-center" id="page-hero">
    <div class="container-wide relative z-10">
        <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-white/50 text-body-sm">
                <li><a href="/homepage" class="hover:text-white transition-colors">Beranda</a></li>
                <li><span class="text-white/25">/</span></li>
                <li><span class="text-[#0d9488] font-medium">Hasil Laut</span></li>
            </ol>
        </nav>
        <span class="text-eyebrow text-[#0d9488] block mb-2">Produk Kami</span>
        <h1 class="text-display-xl text-white">Hasil Laut Segar Kepri</h1>
        <p class="text-body-lg text-white/60 mt-3 max-w-lg mx-auto">
            Langsung dari nelayan lokal Kepulauan Riau — segar, berkualitas, dan terpercaya.
        </p>
    </div>
</section>

<main class="bg-[#f8fafc] py-12">
    <div class="container-wide">

        @if(count($hasils) > 0)
        <div class="product-grid">
            @foreach ($hasils as $index => $hasil)
            <div class="card-product card-order group" id="hasillaut-card-{{ $index }}">

                <div class="relative overflow-hidden">
                    <div class="absolute top-3 left-3 z-20">
                        <input id="checkbox-{{ $index }}"
                               type="checkbox"
                               name="selected_hasils[]"
                               value="{{ $hasil['id'] }}"
                               class="checkbox-custom"
                               onclick="handleCheckboxClick(this, {{ $index }})">
                    </div>
                    <div class="absolute top-3 right-3 z-20">
                        <span class="tag tag-teal text-[11px]">Hasil Laut</span>
                    </div>
                    <img src="{{ asset($hasil['gambar']) }}"
                         alt="{{ $hasil['judul'] }}"
                         class="card-img"
                         loading="lazy">
                </div>

                <div class="p-5 space-y-3">
                    <h3 class="text-heading-md text-[#0c1a24] line-clamp-2" data-product-name>
                        {{ $hasil['judul'] }}
                    </h3>

                    <div class="flex items-center gap-1.5" data-product-location>
                        <i class="fa-solid fa-location-dot text-[#0d9488] text-xs flex-shrink-0"></i>
                        <span class="text-body-sm text-[#64748b] line-clamp-1">{{ $hasil['lokasi'] }}</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-[#f59e0b] font-bold text-lg"
                              data-price="{{ $hasil['harga'] }}">
                            Rp {{ number_format($hasil['harga'], 0, ',', '.') }}
                        </span>
                    </div>

                    <form action="{{ route('wa.hasillaut', ['id' => $hasil['id']]) }}"
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
                                   data-price="{{ $hasil['harga'] }}"
                                   oninput="updateTotal(this)">
                            <span class="total-price text-body-sm text-[#0c1a24] font-semibold">
                                Rp {{ number_format($hasil['harga'], 0, ',', '.') }}
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
            <div class="text-6xl mb-4">🐟</div>
            <h3 class="text-heading-lg text-[#0c1a24] mb-2">Belum ada produk hasil laut</h3>
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