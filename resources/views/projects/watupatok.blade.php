@extends('layouts.app')

@section('title', 'Detail Proyek - Profil Desa Watupatok')

@section('content')
    <section class="py-20 px-6 max-w-5xl mx-auto min-h-screen">
        
        {{-- Tombol Kembali --}}
        <div class="mb-8">
            <a href="{{ route('projects.index') }}" class="font-mono text-sm text-primary hover:text-secondary transition-colors flex items-center gap-2">
                &larr; Kembali ke Galeri Proyek
            </a>
        </div>

        {{-- Header Proyek --}}
        <div class="mb-12">
            <div class="flex flex-wrap gap-2 mb-4 font-mono text-xs">
                <span class="bg-slate-900 border border-slate-800 text-primary px-3 py-1 rounded-full">Web Branding</span>
                <span class="bg-slate-900 border border-slate-800 text-secondary px-3 py-1 rounded-full">UI/UX Design</span>
                <span class="bg-slate-900 border border-slate-800 text-amber-400 px-3 py-1 rounded-full">Digitalization</span>
            </div>
            <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl text-slate-100 mb-4">
                Sistem Informasi Profil Desa Watupatok
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed max-w-3xl">
                Transformasi digital untuk memperkuat identitas desa. Website ini menjadi jendela utama bagi dunia luar untuk mengenal potensi, sejarah, dan layanan publik Desa Watupatok.
            </p>
        </div>

        {{-- Info Bar --}}
        <div class="grid gap-8 md:grid-cols-3 mb-16 border-y border-slate-800/50 py-10">
            <div>
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Tipe Proyek</h4>
                <p class="text-slate-200 font-semibold text-lg">Informational Website</p>
            </div>
            <div>
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Tujuan Utama</h4>
                <p class="text-slate-200 font-semibold text-lg">Digital Branding Desa</p>
            </div>
            <div>
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Metode</h4>
                <p class="text-slate-200 font-semibold text-lg">Data Digitizing</p>
            </div>
        </div>

        {{-- Konten Utama --}}
        <div class="space-y-16 text-slate-400 text-lg leading-relaxed">
            
            {{-- Tantangan --}}
            <section class="space-y-4">
                <h3 class="text-2xl font-bold text-slate-100 flex items-center gap-3">
                    <span class="text-primary font-mono text-xl">01.</span> Urgensi Digitalisasi
                </h3>
                <p>
                    Desa Watupatok memiliki kekayaan potensi alam dan sejarah yang luar biasa, namun selama ini informasi tersebut hanya tersimpan dalam arsip fisik kantor desa dan ingatan lisan para tokoh masyarakat. Akibatnya, potensi desa sulit dikenal oleh masyarakat luas maupun calon investor.
                </p>
                <p>
                    Proyek ini bertujuan untuk membangun sebuah **"Digital Presence"** yang profesional agar informasi profil desa, struktur organisasi, hingga potensi ekonomi lokal dapat diakses secara transparan dan menarik.
                </p>
            </section>

            {{-- Pendekatan UI/UX --}}
            <section class="space-y-6">
                <h3 class="text-2xl font-bold text-slate-100 flex items-center gap-3">
                    <span class="text-secondary font-mono text-xl">02.</span> Strategi Desain & Fitur
                </h3>
                
                <div class="grid gap-6 md:grid-cols-2">
                    <div class="p-6 border border-slate-800 bg-slate-900/40 rounded-2xl">
                        <div class="text-secondary font-bold mb-2">Visual Storytelling</div>
                        <p class="text-sm">Menonjolkan galeri foto kegiatan desa dan dokumentasi potensi alam untuk menciptakan kesan visual yang mendalam bagi pengunjung.</p>
                    </div>
                    <div class="p-6 border border-slate-800 bg-slate-900/40 rounded-2xl">
                        <div class="text-secondary font-bold mb-2">Aksesibilitas Informasi</div>
                        <p class="text-sm">Navigasi yang dirancang sangat sederhana agar semua kalangan, termasuk warga senior desa, dapat menemukan informasi layanan dengan mudah.</p>
                    </div>
                    <div class="p-6 border border-slate-800 bg-slate-900/40 rounded-2xl">
                        <div class="text-secondary font-bold mb-2">Responsive Layout</div>
                        <p class="text-sm">Optimalisasi tampilan di perangkat mobile, mengingat mayoritas warga desa mengakses informasi melalui smartphone.</p>
                    </div>
                    <div class="p-6 border border-slate-800 bg-slate-900/40 rounded-2xl">
                        <div class="text-secondary font-bold mb-2">Potensi Wisata & UMKM</div>
                        <p class="text-sm">Halaman khusus untuk mempromosikan produk unggulan UMKM desa guna meningkatkan ekonomi kreatif masyarakat lokal.</p>
                    </div>
                </div>
            </section>

            {{-- Dampak --}}
            <section class="p-8 md:p-12 bg-slate-900 rounded-3xl border border-slate-800">
                <h3 class="text-2xl font-bold text-slate-100 mb-4">Hasil & Dampak</h3>
                <p>
                    Melalui website profil ini, Desa Watupatok kini memiliki identitas resmi di dunia internet. Informasi mengenai transparansi dana desa, profil perangkat, hingga sejarah desa kini dapat diakses kapan saja dan di mana saja. Proyek ini menjadi langkah awal Desa Watupatok menuju konsep **Smart Village**.
                </p>
            </section>

        </div>
    </section>
@endsection