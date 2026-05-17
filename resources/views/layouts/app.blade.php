<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portfolio') | Muhammad Alfian Firdaus</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-300 bg-slate-950">

    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-secondary/15 rounded-full blur-[120px]"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 border-b border-slate-800/50 bg-slate-950/80 backdrop-blur-md">
        <div class="max-w-6xl px-6 mx-auto">
            <div class="flex items-center justify-between h-16">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="font-mono text-xl font-bold tracking-tighter text-slate-100 group">
                    <span class="text-primary transition-colors group-hover:text-secondary">&lt;</span>Alfian<span class="text-primary transition-colors group-hover:text-secondary">/&gt;</span>
                </a>
                
                {{-- Desktop Menu (Sembunyi di Mobile) --}}
                <div class="hidden space-x-8 md:flex font-mono text-sm items-center">
                    <a href="{{ route('home') }}" class="transition-colors hover:text-primary {{ request()->routeIs('home') ? 'text-primary' : '' }}">Beranda</a>
                    <a href="{{ route('about') }}" class="transition-colors hover:text-primary {{ request()->routeIs('about') ? 'text-primary' : '' }}">Tentang</a>
                    <a href="{{ route('projects.index') }}" class="transition-colors hover:text-primary {{ request()->routeIs('projects.*') ? 'text-primary' : '' }}">Proyek</a>
                    <a href="{{ route('contact') }}" class="transition-colors hover:text-primary {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Kontak</a>
                </div>

                {{-- Tombol Hamburger Menu (Hanya Tampil di Mobile) --}}
                <button id="mobile-menu-button" class="md:hidden text-slate-300 hover:text-primary focus:outline-none transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon-bars" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu Panel (Drop-down) --}}
        <div id="mobile-menu-panel" class="hidden md:hidden bg-slate-950/95 border-b border-slate-800 backdrop-blur-xl absolute w-full left-0 top-16 shadow-2xl">
            <div class="flex flex-col px-6 py-6 space-y-6 font-mono text-base text-center">
                <a href="{{ route('home') }}" class="block transition-colors hover:text-primary {{ request()->routeIs('home') ? 'text-primary' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="block transition-colors hover:text-primary {{ request()->routeIs('about') ? 'text-primary' : '' }}">Tentang</a>
                <a href="{{ route('projects.index') }}" class="block transition-colors hover:text-primary {{ request()->routeIs('projects.*') ? 'text-primary' : '' }}">Proyek</a>
                <a href="{{ route('contact') }}" class="block transition-colors hover:text-primary {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Kontak</a>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        @yield('content')
    </main>

    <footer class="py-8 text-center border-t border-slate-800/50 mt-12">
        <p class="font-mono text-sm text-slate-500">
            Didesain & Dibangun oleh <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Muhammad Alfian Firdaus</span>
        </p>
    </footer>

    {{-- Script untuk Toggle Mobile Menu --}}
    <script>
        const btn = document.getElementById('mobile-menu-button');
        const panel = document.getElementById('mobile-menu-panel');
        const iconBars = document.getElementById('menu-icon-bars');
        const iconClose = document.getElementById('menu-icon-close');

        btn.addEventListener('click', () => {
            panel.classList.toggle('hidden');
            iconBars.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
</body>
</html>