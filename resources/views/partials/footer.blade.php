{{-- ============================================================
     FOOTER — UMKM Maritim Kepulauan Riau
     Design: Bahari Moderne (Shopify dark footer inspired)
     ============================================================ --}}

<!-- Scroll To Top Button -->
<div id="scrollToTopBtn" class="fixed bottom-6 right-6 z-50 transition-all duration-300 opacity-0 invisible">
    <button class="scroll-top-btn" aria-label="Kembali ke atas">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"/>
        </svg>
    </button>
</div>

<!-- Footer -->
<footer id="footer" class="bg-[#0a1628] mt-20">

    <!-- Wave Separator -->
    <div class="w-full overflow-hidden leading-none">
        <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 sm:h-16">
            <path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,60 L0,60 Z" fill="currentColor" class="text-[#0a1628]"/>
            <path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30" fill="none" stroke="rgba(13,148,136,0.3)" stroke-width="1.5"/>
        </svg>
    </div>

    <div class="container-wide py-16">

        <!-- Main Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

            <!-- Col 1: Brand -->
            <div class="sm:col-span-2 lg:col-span-1">
                <a href="/homepage" class="flex items-center gap-3 mb-5">
                    <img src="{{ asset('images/logo-1.png') }}" alt="UMKM Maritim Logo" class="h-12 w-12 object-contain rounded-xl">
                    <div>
                        <div class="text-white font-semibold text-base leading-tight">UMKM Maritim</div>
                        <div class="text-[#64748b] text-xs">Kepulauan Riau</div>
                    </div>
                </a>
                <p class="text-[#64748b] text-sm leading-relaxed max-w-xs mb-6">
                    Wadah promosi produk lokal maritim yang mengangkat budaya, rasa, dan kekayaan alam pesisir Kepulauan Riau.
                </p>
                <!-- Social Icons -->
                <div class="flex items-center gap-3">
                    <a href="#" aria-label="Facebook"
                       class="w-9 h-9 flex items-center justify-center rounded-xl bg-white/5 text-[#64748b] hover:bg-[#1877f2] hover:text-white border border-white/5 hover:border-[#1877f2] transition-all duration-200">
                        <i class="fa-brands fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" aria-label="Instagram"
                       class="w-9 h-9 flex items-center justify-center rounded-xl bg-white/5 text-[#64748b] hover:bg-gradient-to-br hover:from-[#f09433] hover:to-[#bc1888] hover:text-white border border-white/5 transition-all duration-200">
                        <i class="fa-brands fa-instagram text-sm"></i>
                    </a>
                    <a href="#" aria-label="X / Twitter"
                       class="w-9 h-9 flex items-center justify-center rounded-xl bg-white/5 text-[#64748b] hover:bg-white hover:text-black border border-white/5 transition-all duration-200">
                        <i class="fa-brands fa-x-twitter text-sm"></i>
                    </a>
                    <a href="https://wa.me/628126xxxxxx" aria-label="WhatsApp" target="_blank" rel="noopener"
                       class="w-9 h-9 flex items-center justify-center rounded-xl bg-white/5 text-[#64748b] hover:bg-[#25d366] hover:text-white border border-white/5 transition-all duration-200">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: Navigasi -->
            <div>
                <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-5">Navigasi</h3>
                <ul class="space-y-3">
                    <li><a href="/homepage"    class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Beranda</a></li>
                    <li><a href="/kuliner"     class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Kuliner</a></li>
                    <li><a href="/hasillaut"   class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Hasil Laut</a></li>
                    <li><a href="/aksesoris"   class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Aksesoris</a></li>
                    <li><a href="/galeri"      class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Galeri</a></li>
                    <li><a href="/tentangkami" class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Tentang Kami</a></li>
                    <li><a href="/kontak"      class="text-[#64748b] hover:text-[#0d9488] text-sm transition-colors duration-200">Kontak</a></li>
                </ul>
            </div>

            <!-- Col 3: Jam Operasional -->
            <div>
                <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-5">Jam Operasional</h3>
                <ul class="space-y-2.5">
                    <li class="flex justify-between gap-4">
                        <span class="text-[#64748b] text-sm">Senin – Jumat</span>
                        <span class="text-[#99f6e4] text-sm font-medium">08.00 – 17.00</span>
                    </li>
                    <li class="flex justify-between gap-4">
                        <span class="text-[#64748b] text-sm">Sabtu</span>
                        <span class="text-[#99f6e4] text-sm font-medium">09.00 – 13.00</span>
                    </li>
                    <li class="flex justify-between gap-4">
                        <span class="text-[#64748b] text-sm">Minggu & Libur</span>
                        <span class="text-[#f97316] text-sm font-medium">Tutup</span>
                    </li>
                </ul>
                <div class="mt-5 pt-5 border-t border-white/5">
                    <span class="tag tag-dark text-xs">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#0d9488] mr-1.5 inline-block"></span>
                        Dilayani setiap hari kerja
                    </span>
                </div>
            </div>

            <!-- Col 4: Kontak -->
            <div>
                <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-5">Hubungi Kami</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-[#0d9488] mt-0.5 text-sm flex-shrink-0"></i>
                        <span class="text-[#64748b] text-sm leading-relaxed">Jalan Senggarang, Kepulauan Riau</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-[#0d9488] text-sm flex-shrink-0"></i>
                        <a href="tel:+628126xxxxxx" class="text-[#64748b] hover:text-white text-sm transition-colors">+0812-6xxx-xxxx</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-[#0d9488] text-sm flex-shrink-0"></i>
                        <a href="mailto:umkmkepri@gmail.com" class="text-[#64748b] hover:text-white text-sm transition-colors">umkmkepri@gmail.com</a>
                    </li>
                </ul>
                <a href="/kontak" class="btn btn-outline-teal btn-sm mt-6 w-full justify-center">
                    Kirim Pesan
                </a>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-[#475569] text-xs">
                © 2025 UMKM Maritim Kepulauan Riau. Dikembangkan oleh <span class="text-[#0d9488]">Cahyadi Prasetyo</span>.
            </p>
            <div class="flex items-center gap-1">
                <span class="text-[#475569] text-xs">Dibuat dengan</span>
                <svg class="w-3.5 h-3.5 text-[#f97316] mx-0.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402z"/>
                </svg>
                <span class="text-[#475569] text-xs">untuk Kepri</span>
            </div>
        </div>

    </div>
</footer>

<!-- ============================================================
     SCRIPTS
     ============================================================ -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

<script>
// --- Scroll To Top ---
(function() {
    const btn = document.getElementById('scrollToTopBtn');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            btn.classList.remove('opacity-0', 'invisible');
            btn.classList.add('opacity-100', 'visible');
        } else {
            btn.classList.add('opacity-0', 'invisible');
            btn.classList.remove('opacity-100', 'visible');
        }
    }, { passive: true });

    btn.querySelector('button').addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();

// --- Shared: Order via WA (multi-select) ---
let selectedItems = [];

function handleCheckboxClick(checkbox, index) {
    const card = checkbox.closest('.card-order');
    if (!card) return;
    const productId = checkbox.value;
    const nameEl = card.querySelector('[data-product-name]') || card.querySelector('h5');
    const priceEl = card.querySelector('[data-product-price]') || card.querySelector('[data-price]');
    const locationEl = card.querySelector('[data-product-location]');
    const qtyInput = card.querySelector('.qty-input, .order-input');

    const productName = nameEl ? nameEl.textContent.trim() : '';
    const price = priceEl ? parseInt((priceEl.getAttribute('data-price') || priceEl.textContent).replace(/[^\d]/g, '')) : 0;
    const quantity = qtyInput ? parseInt(qtyInput.value) : 1;
    const location = locationEl ? locationEl.textContent.trim() : '';

    if (checkbox.checked) {
        if (!selectedItems.find(i => i.id === productId)) {
            selectedItems.push({ id: productId, name: productName, price, quantity, location });
        }
    } else {
        selectedItems = selectedItems.filter(i => i.id !== productId);
    }
    toggleWaButton();
}

function updateTotal(input) {
    const price = parseFloat(input.getAttribute('data-price') || 0);
    const qty = parseInt(input.value) || 1;
    const totalEl = input.closest('.flex, form')?.querySelector('.total-price');
    if (totalEl) totalEl.textContent = 'Rp ' + (price * qty).toLocaleString('id-ID');

    const card = input.closest('.card-order');
    const checkbox = card?.querySelector('input[type="checkbox"]');
    if (checkbox?.checked) {
        const item = selectedItems.find(i => i.id === checkbox.value);
        if (item) { item.quantity = qty; toggleWaButton(); }
    }
}

async function toggleWaButton() {
    const container = document.getElementById('wa-button-container');
    const waBtn = document.getElementById('wa-button');
    if (!container || !waBtn) return;

    if (selectedItems.length > 0) {
        try {
            const res = await fetch('/data/kontak_admin.json');
            const data = await res.json();
            const adminWa = data.admin_umkm[0]?.wa;
            if (!adminWa) throw new Error('No admin WA');

            let msg = 'Halo Admin, saya ingin memesan:\n\n';
            let total = 0;
            selectedItems.forEach((item, i) => {
                const sub = item.price * item.quantity;
                total += sub;
                msg += `*Produk ${i + 1}:*\n${item.name}\nHarga: Rp ${item.price.toLocaleString('id-ID')}\nJumlah: ${item.quantity}\nLokasi: ${item.location}\nSubtotal: Rp ${sub.toLocaleString('id-ID')}\n\n`;
            });
            msg += `*TOTAL: Rp ${total.toLocaleString('id-ID')}*\n\nApakah masih tersedia? Terima kasih.`;

            waBtn.href = `https://wa.me/${adminWa}?text=${encodeURIComponent(msg)}`;
            container.classList.remove('hidden');
        } catch (e) {
            console.error(e);
        }
    } else {
        container.classList.add('hidden');
    }
}

// Gallery Filter
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const sortFilter = document.getElementById('sortFilter');

    function updateQueryParams() {
        const params = new URLSearchParams();
        if (searchInput?.value) params.set('search', searchInput.value);
        if (categoryFilter?.value) params.set('category', categoryFilter.value);
        if (sortFilter?.value && sortFilter.value !== 'terbaru') params.set('sort', sortFilter.value);
        window.location.search = params.toString();
    }

    searchInput?.addEventListener('change', updateQueryParams);
    categoryFilter?.addEventListener('change', updateQueryParams);
    sortFilter?.addEventListener('change', updateQueryParams);
});
</script>

</body>
</html>
