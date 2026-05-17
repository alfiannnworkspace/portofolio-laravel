@extends('layouts.app')

@section('title', 'Semua Proyek')

@section('content')
    <section class="py-20 px-6 max-w-6xl mx-auto min-h-screen">
        <div class="mb-16 text-center">
            <p class="font-mono text-primary mb-2">Showcase</p>
            <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl text-slate-100">
                Koleksi <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Kode & Karya</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg text-slate-400">
                Berikut adalah beberapa proyek yang saya bangun, mulai dari aplikasi web fungsional hingga eksperimen kode.
            </p>
        </div>

        {{-- Grid lebih kecil (3 kolom) untuk daftar lengkap --}}
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            
            {{-- Proyek 1 --}}
            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl hover:border-primary/50 transition-colors group">
                <div class="font-mono text-xs text-slate-500 mb-3">2025</div>
                <h3 class="text-lg font-bold text-slate-100 mb-2 group-hover:text-primary">PancerPOS</h3>
                <p class="text-sm text-slate-400 mb-4 h-20 overflow-hidden">Pembangunan sistem informasi manajemen terintegrasi untuk pendataan operasional UMKM.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">Laravel</span>
                    <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">Tailwind</span>
                </div>
                <a href="{{ route('projects.pancerpos') }}" class="text-sm font-medium text-secondary hover:text-secondary-glare">Lihat Detail &rarr;</a>
            </div>

            {{-- Proyek 2 --}}
            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl hover:border-primary/50 transition-colors group">
                <div class="font-mono text-xs text-slate-500 mb-3">2026</div>
                <h3 class="text-lg font-bold text-slate-100 mb-2 group-hover:text-primary">Sistem Informasi Profil Desa Watupatok</h3>
                <p class="text-sm text-slate-400 mb-4 h-20 overflow-hidden">Digitalisasi data desa untuk transparansi informasi publik.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">HTML</span>
                    <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">CSS</span>
                    <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">JavaScript</span>
                </div>
                <a href="{{ route('projects.watupatok') }}" class="text-sm font-medium text-secondary hover:text-secondary-glare">Lihat Detail &rarr;</a>
            </div>

             {{-- Proyek 3 --}}
            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl hover:border-secondary/50 transition-colors group flex flex-col h-full">
                <div class="font-mono text-xs text-slate-500 mb-3">2025</div>
                <h3 class="text-lg font-bold text-slate-100 mb-2 group-hover:text-secondary transition-colors">GNS-Digital-Opinion</h3>
                <p class="text-sm text-slate-400 mb-4 flex-grow">
                    Platform digital penampung aspirasi dan opini masyarakat Desa Gunungsari untuk transparansi publik dan peningkatan mutu pelayanan perangkat desa.
                </p>
                <div class="mb-6">
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">Laravel</span>
                        <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">Tailwind CSS</span>
                        <span class="bg-slate-800 text-primary text-xs font-mono px-2 py-0.5 rounded">MySQL</span>
                    </div>
                </div>
                <a href="{{ route('projects.gns-digital-opinion') }}" class="text-sm font-medium text-secondary hover:text-secondary-glare">Lihat Detail &rarr;</a>
            </div>

        </div>
    </section>
@endsection