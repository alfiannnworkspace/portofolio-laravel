@extends('layouts.app')

@section('title', 'Detail Proyek - GNS-Digital-Opinion')

@section('content')
    <section class="py-20 px-6 max-w-5xl mx-auto min-h-screen">
        
        {{-- Tombol Kembali --}}
        <div class="mb-8">
            <a href="{{ route('projects.index') }}" class="font-mono text-sm text-secondary hover:text-primary transition-colors flex items-center gap-2">
                &larr; Kembali ke Portfolio
            </a>
        </div>

        {{-- Header Proyek --}}
        <div class="mb-12">
            <div class="flex flex-wrap gap-2 mb-4 font-mono text-xs">
                <span class="bg-slate-900 border border-slate-800 text-secondary px-3 py-1 rounded-full">Laravel 13</span>
                <span class="bg-slate-900 border border-slate-800 text-primary px-3 py-1 rounded-full">Tailwind CSS</span>
                <span class="bg-slate-900 border border-slate-800 text-orange-400 px-3 py-1 rounded-full">Public Service</span>
            </div>
            <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl text-slate-100 mb-4">
                GNS-Digital-Opinion
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed max-w-3xl">
                Sebuah platform aspirasi digital yang menjembatani komunikasi antara warga Desa Gunungsari dengan perangkat desa guna mewujudkan tata kelola desa yang transparan.
            </p>
        </div>

        {{-- Info Bar --}}
        <div class="grid gap-8 md:grid-cols-3 mb-16 border-y border-slate-800/50 py-10">
            <div>
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Kategori</h4>
                <p class="text-slate-200 font-semibold text-lg">E-Government / Social Tool</p>
            </div>
            <div>
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Status</h4>
                <p class="text-emerald-400 font-semibold text-lg">Production Ready</p>
            </div>
            <div>
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Teknologi Inti</h4>
                <p class="text-slate-200 font-semibold text-lg">MVC Architecture</p>
            </div>
        </div>

        {{-- Studi Kasus --}}
        <div class="space-y-16 text-slate-400 text-lg leading-relaxed">
            
            {{-- Masalah --}}
            <section class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-100 mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded bg-secondary/20 text-secondary flex items-center justify-center text-sm font-mono">01</span>
                        Tantangan Proyek
                    </h3>
                    <p>
                        Selama ini, warga Desa Gunungsari kesulitan menyampaikan keluhan atau saran karena harus datang langsung ke kantor desa pada jam kerja. Hal ini menyebabkan banyak aspirasi yang tidak tersampaikan atau bahkan hilang dalam tumpukan dokumen manual.
                    </p>
                    <p class="mt-4">
                        Dibutuhkan sistem yang dapat menampung data secara anonim namun tetap valid, serta memberikan ruang bagi perangkat desa untuk memberikan tanggapan secara terbuka.
                    </p>
                </div>
                <div class="p-8 bg-slate-900 border border-slate-800 rounded-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-24 h-24 text-secondary" fill="currentColor" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2v10z"/></svg>
                    </div>
                    <div class="relative z-10">
                        <h4 class="text-slate-200 font-bold mb-2 uppercase text-xs tracking-widest font-mono">Key Problem</h4>
                        <ul class="text-sm space-y-2 list-disc list-inside">
                            <li>Fragmentasi data aspirasi warga</li>
                            <li>Rendahnya partisipasi publik</li>
                            <li>Kurangnya rekam jejak penyelesaian keluhan</li>
                        </ul>
                    </div>
                </div>
            </section>

            {{-- Solusi Teknis --}}
            <section class="space-y-8">
                <h3 class="text-2xl font-bold text-slate-100 flex items-center gap-3">
                    <span class="w-8 h-8 rounded bg-primary/20 text-primary flex items-center justify-center text-sm font-mono">02</span>
                    Solusi & Fitur Teknis
                </h3>
                
                <div class="grid gap-6 md:grid-cols-3">
                    <div class="p-6 rounded-xl border border-slate-800 bg-slate-900/50 hover:bg-slate-900 transition-colors">
                        <div class="w-10 h-10 bg-secondary/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="text-slate-100 font-bold mb-2">Validasi Data</h4>
                        <p class="text-sm">Menerapkan <span class="text-primary">Laravel Validation</span> yang ketat untuk mencegah spam dan injeksi skrip berbahaya pada form opini.</p>
                    </div>

                    <div class="p-6 rounded-xl border border-slate-800 bg-slate-900/50 hover:bg-slate-900 transition-colors">
                        <div class="w-10 h-10 bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-slate-100 font-bold mb-2">Statistik Aspirasi</h4>
                        <p class="text-sm">Menyajikan rekapitulasi kategori opini (Infrastruktur, Sosial, Kesehatan) dalam bentuk grafik yang diolah dari query MySQL.</p>
                    </div>

                    <div class="p-6 rounded-xl border border-slate-800 bg-slate-900/50 hover:bg-slate-900 transition-colors">
                        <div class="w-10 h-10 bg-emerald-500/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-slate-100 font-bold mb-2">Responsivitas</h4>
                        <p class="text-sm">Antarmuka yang dioptimalkan dengan <span class="text-secondary">Tailwind CSS</span> agar warga bisa berkirim opini dengan nyaman dari ponsel manapun.</p>
                    </div>
                </div>
            </section>

            {{-- Implementasi --}}
            <section class="p-8 md:p-12 bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 rounded-3xl">
                <h3 class="text-2xl font-bold text-slate-100 mb-6 flex items-center gap-3">
                    <span class="text-secondary font-mono text-xl">03.</span> Eksekusi Kode
                </h3>
                <div class="prose prose-invert prose-slate max-w-none text-slate-400">
                    <p>
                        Dalam pengembangan ini, saya berfokus pada **User Experience** di mana warga tidak perlu membuat akun yang rumit untuk sekadar memberi saran, namun admin memiliki kendali penuh untuk menyaring pesan yang masuk.
                    </p>
                    <p class="mt-4">
                        Saya menggunakan **Blade Templating** untuk memisahkan logika dashboard admin dengan form publik, memastikan sistem tetap aman dan data aspirasi terenkripsi dengan baik dalam database.
                    </p>
                </div>
            </section>

        </div>
    </section>
@endsection