<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="UMKM Maritim Kepulauan Riau — Produk lokal maritim terbaik dari pesisir Kepulauan Riau">
    <title>UMKM Maritim Kepri | {{ $title ?? 'Beranda' }}</title>
    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<!-- ============================================================
     NAVBAR
     ============================================================ -->
<header id="site-navbar" class="fixed top-0 left-0 right-0 z-[9990] transition-all duration-300 navbar-transparent">
    <nav class="container-wide">
        <div class="flex items-center justify-between h-[72px]">

            <!-- Logo -->
            <a href="/homepage" class="flex items-center gap-3 flex-shrink-0" id="nav-logo">
                <img src="{{ asset('images/logo-1.png') }}"
                     alt="UMKM Maritim Logo"
                     class="h-10 w-10 object-contain rounded-lg">
                <span class="font-semibold text-base leading-tight hidden sm:block" id="nav-brand-text">
                    UMKM Maritim<br>
                    <span class="text-xs font-normal opacity-75">Kepulauan Riau</span>
                </span>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-7" id="nav-links">
                <a href="/homepage"
                   id="nav-beranda"
                   class="nav-link {{ ($title ?? '') === 'homepage' ? 'active' : '' }}">
                    Beranda
                </a>

                <!-- Dropdown Produk -->
                <div class="relative" id="produk-dropdown-wrap">
                    <button id="produk-trigger"
                            class="nav-link flex items-center gap-1.5 {{ in_array($title ?? '', ['Kuliner','Hasil Laut','Aksesoris']) ? 'active' : '' }}"
                            aria-expanded="false"
                            aria-haspopup="true">
                        Produk
                        <svg id="produk-chevron" class="w-3.5 h-3.5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>

                    <div id="produk-dropdown"
                         class="dropdown-menu absolute top-full left-1/2 -translate-x-1/2 mt-3 opacity-0 invisible translate-y-2 transition-all duration-200"
                         role="menu">
                        <a href="/kuliner"   class="dropdown-item" role="menuitem">
                            <i class="fa-solid fa-bowl-food w-4 mr-2 text-[#0d9488]"></i> Kuliner
                        </a>
                        <a href="/hasillaut" class="dropdown-item" role="menuitem">
                            <i class="fa-solid fa-fish w-4 mr-2 text-[#0d9488]"></i> Hasil Laut
                        </a>
                        <a href="/aksesoris" class="dropdown-item" role="menuitem">
                            <i class="fa-solid fa-gem w-4 mr-2 text-[#0d9488]"></i> Aksesoris
                        </a>
                    </div>
                </div>

                <a href="/galeri"
                   id="nav-galeri"
                   class="nav-link {{ ($title ?? '') === 'Galeri' ? 'active' : '' }}">
                    Galeri
                </a>
                <a href="/tentangkami"
                   id="nav-tentang"
                   class="nav-link {{ ($title ?? '') === 'Tentang Kami' ? 'active' : '' }}">
                    Tentang Kami
                </a>
                <a href="/kontak"
                   id="nav-kontak"
                   class="nav-link {{ ($title ?? '') === 'Kontak' ? 'active' : '' }}">
                    Kontak
                </a>
            </div>

            <!-- Right Side -->
            <div class="flex items-center gap-3">
                <!-- CTA -->
                <a href="/kuliner" class="btn btn-primary btn-sm hidden md:inline-flex" id="nav-cta">
                    Lihat Produk
                </a>

                <!-- Hamburger -->
                <button id="hamburger-btn"
                        aria-label="Buka menu navigasi"
                        aria-expanded="false"
                        class="md:hidden flex flex-col gap-[5px] p-2 rounded-lg transition-colors">
                    <span id="ham-1" class="w-5 h-[2px] rounded-full transition-all duration-300 bg-current"></span>
                    <span id="ham-2" class="w-5 h-[2px] rounded-full transition-all duration-300 bg-current"></span>
                    <span id="ham-3" class="w-5 h-[2px] rounded-full transition-all duration-300 bg-current"></span>
                </button>
            </div>

        </div>
    </nav>
</header>

<!-- Mobile Overlay -->
<div id="mobile-overlay" class="mobile-overlay" aria-hidden="true"></div>

<!-- Mobile Menu Slide -->
<aside id="mobile-menu" class="mobile-menu" aria-label="Menu navigasi mobile" aria-hidden="true">
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-9 w-9 object-contain rounded-lg">
            <span class="text-white font-semibold text-sm leading-tight">
                UMKM Maritim<br>
                <span class="text-xs font-normal opacity-60">Kepulauan Riau</span>
            </span>
        </div>
        <button id="close-menu-btn" aria-label="Tutup menu" class="text-white/60 hover:text-white p-1 transition-colors">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Nav Items -->
    <nav class="flex flex-col gap-1">
        <a href="/homepage" class="mobile-nav-item text-white/80 hover:text-white hover:bg-white/10 px-4 py-3 rounded-xl font-medium transition-all">
            Beranda
        </a>

        <!-- Mobile Produk Accordion -->
        <div>
            <button id="mobile-produk-toggle"
                    class="w-full flex items-center justify-between text-white/80 hover:text-white hover:bg-white/10 px-4 py-3 rounded-xl font-medium transition-all">
                Produk
                <svg id="mobile-produk-chevron" class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6"/>
                </svg>
            </button>
            <div id="mobile-produk-sub" class="hidden pl-4 flex flex-col gap-1 mt-1">
                <a href="/kuliner"   class="text-[#99f6e4] hover:text-white px-4 py-2.5 rounded-lg text-sm font-medium transition-colors hover:bg-white/5">
                    <i class="fa-solid fa-bowl-food mr-2 text-xs"></i>Kuliner
                </a>
                <a href="/hasillaut" class="text-[#99f6e4] hover:text-white px-4 py-2.5 rounded-lg text-sm font-medium transition-colors hover:bg-white/5">
                    <i class="fa-solid fa-fish mr-2 text-xs"></i>Hasil Laut
                </a>
                <a href="/aksesoris" class="text-[#99f6e4] hover:text-white px-4 py-2.5 rounded-lg text-sm font-medium transition-colors hover:bg-white/5">
                    <i class="fa-solid fa-gem mr-2 text-xs"></i>Aksesoris
                </a>
            </div>
        </div>

        <a href="/galeri"       class="text-white/80 hover:text-white hover:bg-white/10 px-4 py-3 rounded-xl font-medium transition-all">Galeri</a>
        <a href="/tentangkami"  class="text-white/80 hover:text-white hover:bg-white/10 px-4 py-3 rounded-xl font-medium transition-all">Tentang Kami</a>
        <a href="/kontak"       class="text-white/80 hover:text-white hover:bg-white/10 px-4 py-3 rounded-xl font-medium transition-all">Kontak</a>
    </nav>

    <div class="mt-8 pt-6 border-t border-white/10">
        <a href="/kuliner" class="btn btn-primary w-full justify-center">
            <i class="fa-solid fa-store mr-2"></i>Lihat Semua Produk
        </a>
    </div>
</aside>

<!-- Spacer untuk fixed navbar -->
<div class="h-[72px]"></div>

<!-- ============================================================
     NAVBAR JAVASCRIPT
     ============================================================ -->
<script>
(function() {
    const navbar = document.getElementById('site-navbar');
    const brandText = document.getElementById('nav-brand-text');
    const navLinks = document.querySelectorAll('.nav-link');
    const navCta = document.getElementById('nav-cta');
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const ham1 = document.getElementById('ham-1');
    const ham2 = document.getElementById('ham-2');
    const ham3 = document.getElementById('ham-3');

    // --- Scroll Behavior ---
    const isHeroPage = document.body.classList.contains('has-hero');
    let isScrolled = false;

    function updateNavbar() {
        const scrollY = window.scrollY;
        const shouldSolid = scrollY > 40 || !isHeroPage;

        if (shouldSolid && !isScrolled) {
            isScrolled = true;
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('navbar-solid');
            navLinks.forEach(l => l.style.color = '#0c1a24');
            if (brandText) brandText.style.color = '#0c1a24';
            if (navCta) {
                navCta.classList.remove('btn-outline-white');
                navCta.classList.add('btn-primary');
            }
            hamburgerBtn.style.color = '#0c1a24';
        } else if (!shouldSolid && isScrolled) {
            isScrolled = false;
            navbar.classList.add('navbar-transparent');
            navbar.classList.remove('navbar-solid');
            navLinks.forEach(l => l.style.color = 'rgba(255,255,255,0.9)');
            if (brandText) brandText.style.color = '#ffffff';
            if (navCta) {
                navCta.classList.add('btn-outline-white');
                navCta.classList.remove('btn-primary');
            }
            hamburgerBtn.style.color = '#ffffff';
        }
    }

    // Set initial state on hero pages
    if (isHeroPage) {
        navLinks.forEach(l => l.style.color = 'rgba(255,255,255,0.9)');
        if (brandText) brandText.style.color = '#ffffff';
        if (navCta) {
            navCta.classList.add('btn-outline-white');
            navCta.classList.remove('btn-primary');
        }
        hamburgerBtn.style.color = '#ffffff';
    } else {
        navbar.classList.remove('navbar-transparent');
        navbar.classList.add('navbar-solid');
    }

    window.addEventListener('scroll', updateNavbar, { passive: true });
    updateNavbar();

    // --- Dropdown Produk ---
    const produkTrigger = document.getElementById('produk-trigger');
    const produkDropdown = document.getElementById('produk-dropdown');
    const produkChevron = document.getElementById('produk-chevron');
    let dropdownTimeout;

    const produkWrap = document.getElementById('produk-dropdown-wrap');
    if (produkWrap) {
        produkWrap.addEventListener('mouseenter', () => {
            clearTimeout(dropdownTimeout);
            produkDropdown.classList.remove('opacity-0', 'invisible', 'translate-y-2');
            produkDropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
            produkChevron.style.transform = 'rotate(180deg)';
            produkTrigger.setAttribute('aria-expanded', 'true');
        });

        produkWrap.addEventListener('mouseleave', () => {
            dropdownTimeout = setTimeout(() => {
                produkDropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
                produkDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
                produkChevron.style.transform = 'rotate(0deg)';
                produkTrigger.setAttribute('aria-expanded', 'false');
            }, 150);
        });

        produkTrigger.addEventListener('click', () => {
            const isOpen = !produkDropdown.classList.contains('invisible');
            if (isOpen) {
                produkDropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
                produkDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
                produkChevron.style.transform = 'rotate(0deg)';
                produkTrigger.setAttribute('aria-expanded', 'false');
            } else {
                produkDropdown.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                produkDropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
                produkChevron.style.transform = 'rotate(180deg)';
                produkTrigger.setAttribute('aria-expanded', 'true');
            }
        });
    }

    // --- Mobile Menu ---
    function openMobileMenu() {
        mobileMenu.classList.add('open');
        mobileOverlay.classList.add('open');
        mobileMenu.setAttribute('aria-hidden', 'false');
        hamburgerBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
        // Animate hamburger to X
        ham1.style.transform = 'rotate(45deg) translateY(7px)';
        ham2.style.opacity = '0';
        ham3.style.transform = 'rotate(-45deg) translateY(-7px)';
    }

    function closeMobileMenu() {
        mobileMenu.classList.remove('open');
        mobileOverlay.classList.remove('open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        // Revert hamburger
        ham1.style.transform = '';
        ham2.style.opacity = '1';
        ham3.style.transform = '';
    }

    hamburgerBtn.addEventListener('click', openMobileMenu);
    closeMenuBtn.addEventListener('click', closeMobileMenu);
    mobileOverlay.addEventListener('click', closeMobileMenu);

    // Mobile Produk Accordion
    const mobileProdukToggle = document.getElementById('mobile-produk-toggle');
    const mobileProdukSub = document.getElementById('mobile-produk-sub');
    const mobileProdukChevron = document.getElementById('mobile-produk-chevron');

    mobileProdukToggle.addEventListener('click', () => {
        const isOpen = !mobileProdukSub.classList.contains('hidden');
        mobileProdukSub.classList.toggle('hidden');
        mobileProdukChevron.style.transform = isOpen ? '' : 'rotate(180deg)';
    });

    // Close dropdown on outside click
    document.addEventListener('click', (e) => {
        if (produkWrap && !produkWrap.contains(e.target)) {
            produkDropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
            produkDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
            produkChevron.style.transform = 'rotate(0deg)';
        }
    });
})();
</script>
