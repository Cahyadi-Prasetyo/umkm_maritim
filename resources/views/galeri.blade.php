{{-- ============================================================
     GALERI PAGE — UMKM Maritim Kepulauan Riau
     ============================================================ --}}

@php $title = 'Galeri'; @endphp

@include('partials.navbar')

{{-- Page Hero Mini --}}
<section class="page-hero-mini text-center" id="page-hero">
    <div class="container-wide relative z-10">
        <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-white/50 text-body-sm">
                <li><a href="/homepage" class="hover:text-white transition-colors">Beranda</a></li>
                <li><span class="text-white/25">/</span></li>
                <li><span class="text-[#0d9488] font-medium">Galeri</span></li>
            </ol>
        </nav>
        <span class="text-eyebrow text-[#0d9488] block mb-2">Galeri Produk</span>
        <h1 class="text-display-xl text-white">Semua Koleksi Produk</h1>
        <p class="text-body-lg text-white/60 mt-3 max-w-lg mx-auto">
            Jelajahi seluruh koleksi produk UMKM maritim dari berbagai wilayah Kepulauan Riau.
        </p>
    </div>
</section>

<main class="bg-[#f8fafc] py-12">
    <div class="container-wide">

        {{-- Filter Bar --}}
        <div class="bg-white rounded-2xl border border-[#e2e8f0] p-5 mb-8 sticky top-[80px] z-30 shadow-sm">
            <div class="flex flex-col sm:flex-row gap-4">
                {{-- Search --}}
                <div class="search-pill flex-1" style="padding: 3px;">
                    <svg class="w-4 h-4 text-[#94a3b8] ml-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                    </svg>
                    <input type="text"
                           id="searchInput"
                           placeholder="Cari produk di galeri…"
                           class="flex-1 px-3 py-2.5 bg-transparent border-none outline-none text-[#0c1a24] placeholder-[#94a3b8] text-sm"
                           autocomplete="off"
                           value="{{ $search ?? '' }}">
                </div>

                {{-- Filters --}}
                <div class="flex gap-3 flex-shrink-0">
                    <select id="categoryFilter"
                            class="input-field py-2.5 pr-8 text-sm w-44 rounded-full border-[#e2e8f0] bg-[#f8fafc] cursor-pointer">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}"
                                {{ ($selectedCategory ?? '') === $category ? 'selected' : '' }}>
                                {{ ucfirst(str_replace('_', ' ', $category)) }}
                            </option>
                        @endforeach
                    </select>

                    <select id="sortFilter"
                            class="input-field py-2.5 pr-8 text-sm w-36 rounded-full border-[#e2e8f0] bg-[#f8fafc] cursor-pointer">
                        <option value="terbaru" {{ ($sort ?? '') === 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="terlama" {{ ($sort ?? '') === 'terlama' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Gallery Items — Editorial Alternating Layout --}}
        <div id="galleryContainer" class="space-y-16">
            @forelse ($galeri as $item)
            <div class="product-item group grid md:grid-cols-2 gap-8 lg:gap-12 items-center"
                 data-title="{{ strtolower($item['judul']) }}"
                 data-description="{{ strtolower($item['deskripsi']) }}"
                 data-category="{{ $item['kategori'] }}"
                 data-date="{{ $item['created_at'] ?? '' }}">

                {{-- Image --}}
                <div class="{{ $loop->iteration % 2 === 0 ? 'md:order-2' : '' }} overflow-hidden rounded-2xl">
                    <img src="{{ asset($item['gambar']) }}"
                         alt="{{ $item['judul'] }}"
                         class="w-full h-64 sm:h-72 object-cover rounded-2xl transition-transform duration-500 group-hover:scale-[1.03]"
                         loading="lazy">
                </div>

                {{-- Content --}}
                <div class="{{ $loop->iteration % 2 === 0 ? 'md:order-1' : '' }}">
                    {{-- Category Tag --}}
                    <span class="tag {{ $item['kategori'] === 'kuliner' ? 'tag-teal' : ($item['kategori'] === 'aksesoris' ? 'tag-amber' : 'tag-teal') }} mb-3">
                        {{ ucfirst(str_replace('_', ' ', $item['kategori'] ?? 'produk')) }}
                    </span>

                    <h3 class="text-heading-lg text-[#0c1a24] mt-3 mb-3">{{ $item['judul'] }}</h3>

                    <p class="text-body-md text-[#64748b] leading-relaxed line-clamp-3">
                        {{ $item['deskripsi'] }}
                    </p>

                    <div class="mt-4 flex items-center gap-2 text-body-sm text-[#94a3b8]">
                        <i class="fa-regular fa-calendar text-xs"></i>
                        <span>{{ isset($item['created_at']) ? \Carbon\Carbon::parse($item['created_at'])->format('d M Y') : '' }}</span>
                    </div>
                </div>

            </div>

            {{-- Separator (not after last) --}}
            @if(!$loop->last)
            <div class="border-t border-[#e2e8f0]"></div>
            @endif

            @empty
            <div class="text-center py-24">
                <div class="text-6xl mb-4">🖼️</div>
                <h3 class="text-heading-lg text-[#0c1a24] mb-2">Galeri kosong</h3>
                <p class="text-body-md text-[#64748b]">Belum ada produk yang ditampilkan</p>
            </div>
            @endforelse
        </div>

    </div>
</main>

@include('partials.footer')
