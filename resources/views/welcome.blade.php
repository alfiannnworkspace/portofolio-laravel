@extends('layouts.app')

@section('title', 'Junior Laravel Developer')

@section('content')
    <!-- Hero Section -->
    <section class="flex flex-col justify-center min-h-[90vh] px-6 max-w-6xl mx-auto">
        <div class="space-y-6">
            <p class="font-mono text-secondary">Halo, perkenalkan saya</p>
            <h1 class="text-5xl font-extrabold tracking-tight md:text-7xl text-slate-100">
                Muhammad Alfian Firdaus.
            </h1>
            {{-- Gradasi Cyan ke Ungu --}}
            <h2 class="text-3xl font-bold tracking-tight md:text-5xl text-slate-400">
                Saya membangun solusi berbasis <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary-glare to-secondary">Web & Backend</span>.
            </h2>
            <p class="max-w-2xl text-lg leading-relaxed text-slate-400">
                Seorang Junior Web Developer yang fokus pada ekosistem Laravel. Saya senang memecahkan masalah kompleks, merancang database, dan menciptakan kode yang bersih serta efisien.
            </p>
            <div class="flex flex-wrap gap-4 pt-4">
                {{-- Tombol Utama dengan Gradient on Hover --}}
                <a href="{{ route('projects.index') }}" class="px-6 py-3 font-mono text-sm font-semibold transition-all rounded-md text-slate-950 bg-primary hover:bg-gradient-to-r hover:from-primary hover:to-secondary-glare hover:shadow-lg hover:shadow-primary/20">
                    Lihat Portofolio
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 font-mono text-sm font-semibold transition-all border rounded-md border-slate-700 text-slate-300 hover:bg-slate-800 hover:border-slate-600">
                    Hubungi Saya
                </a>
                {{-- Tombol Download CV Baru --}}
                <a href="{{ asset('docs/CV_Muhammad_Alfian_Firdaus.pdf') }}" download="CV_Muhammad_Alfian_Firdaus.pdf" class="px-6 py-3 font-mono text-sm font-semibold transition-all border rounded-md border-secondary/50 text-secondary hover:bg-secondary/10 hover:border-secondary flex items-center gap-2 group">
                    <svg class="w-4 h-4 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    <span>Unduh CV</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Ringkasan Proyek (Hanya tampilkan 2-3) -->
    <section id="projects" class="py-24 px-6 max-w-6xl mx-auto">
        <div class="flex items-center mb-12 space-x-4">
            <h2 class="text-3xl font-bold text-slate-100">Proyek Terbaru</h2>
            <div class="flex-grow h-px bg-slate-800"></div>
            <a href="{{ route('projects.index') }}" class="font-mono text-sm text-primary hover:text-secondary transition-colors">Lihat Semua &rarr;</a>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            {{-- Contoh Card Proyek 1 --}}
            <div class="flex flex-col h-full transition-all duration-300 border rounded-lg bg-slate-900/50 border-slate-800 hover:-translate-y-2 hover:border-secondary/50 group hover:shadow-xl hover:shadow-secondary/10">
                <div class="p-6 flex-grow">
                    {{-- Icon dengan warna Ungu --}}
                    <div class="flex justify-between items-center mb-4">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-slate-200 group-hover:text-primary transition-colors">Sistem Manajemen Transaksi & Pemesanan UMKM di Pancer Door - PancerPOS</h3>
                    <p class="text-sm text-slate-400 mb-4">
                        Aplikasi backend untuk mengelola transaksi dan stok UMKM. Fokus pada optimasi query database.
                    </p>
                    <a href="{{ route('projects.pancerpos') }}" class="px-6 py-3 font-mono text-sm font-semibold transition-all rounded-md text-slate-950 bg-primary hover:bg-gradient-to-r hover:from-primary hover:to-secondary-glare">
                        Lihat Portofolio
                    </a>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <ul class="flex flex-wrap gap-2 font-mono text-xs text-slate-500">
                        <li>Laravel 12</li>
                        <li>MySQL</li>
                        <li>Tailwind CSS</li>
                    </ul>
                </div>
            </div>
            {{-- Contoh Card Proyek 2 --}}
            <div class="flex flex-col h-full transition-all duration-300 border rounded-lg bg-slate-900/50 border-slate-800 hover:-translate-y-2 hover:border-secondary/50 group hover:shadow-xl hover:shadow-secondary/10">
                <div class="p-6 flex-grow">
                    {{-- Icon dengan warna Ungu --}}
                    <div class="flex justify-between items-center mb-4">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-slate-200 group-hover:text-primary transition-colors">Sistem Informasi Profil Desa Watupatok</h3>
                    <p class="text-sm text-slate-400 mb-4">
                        Aplikasi untuk menampilkan informasi profil desa, termasuk data geografis, demografis, dan potensi wisata. Fokus pada desain UI yang responsif.
                    </p>
                    <a href="{{ route('projects.watupatok') }}" class="px-6 py-3 font-mono text-sm font-semibold transition-all rounded-md text-slate-950 bg-primary hover:bg-gradient-to-r hover:from-primary hover:to-secondary-glare">
                        Lihat Portofolio
                    </a>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <ul class="flex flex-wrap gap-2 font-mono text-xs text-slate-500">
                        <li>HTML </li>
                        <li>CSS</li>
                        <li>Java Script</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection