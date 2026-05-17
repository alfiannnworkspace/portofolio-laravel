@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
    <section class="py-20 px-6 max-w-6xl mx-auto min-h-screen">
        
        {{-- Header Section --}}
        <div class="mb-16">
            <p class="font-mono text-secondary mb-2">Di Balik Kode</p>
            <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl text-slate-100">
                Mengenal Lebih Dekat <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Muhammad Alfian F.</span>
            </h1>
        </div>

        <div class="grid gap-12 lg:grid-cols-12 items-start">
            
            {{-- Kolom Kiri: Foto Profil (Mengambil 4 kolom) --}}
            <div class="lg:col-span-4 relative space-y-6">
                <div class="relative group">
                    {{-- Efek Glow di belakang foto --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-2xl blur opacity-25 group-hover:opacity-60 transition duration-1000 group-hover:duration-300"></div>
                    
                    {{-- Container Foto --}}
                    <div class="relative rounded-2xl overflow-hidden border border-slate-800 bg-slate-900 aspect-[4/5]">
                        {{-- Ganti 'profile.jpg' dengan nama file fotomu nanti --}}
                        <img src="{{ asset('images/profile.jpg') }}" alt="Muhammad Alfian Firdaus" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105">
                    </div>

                    {{-- Floating Badge (Aksen tambahan di atas foto) --}}
                    <div class="absolute -bottom-4 -right-4 bg-slate-950/90 backdrop-blur-md border border-slate-800 p-4 rounded-xl shadow-xl shadow-slate-950/50">
                        <div class="flex items-center gap-3">
                            <span class="relative flex h-3 w-3">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                            </span>
                            <span class="font-mono text-xs text-slate-300">Available for Work</span>
                        </div>
                    </div>
                    
                </div>
                {{-- Tombol Download CV Area About --}}
                    <div class="pt-4">
                        <a href="{{ asset('docs/CV_Muhammad_Alfian_Firdaus.pdf') }}" download="CV_Muhammad_Alfian_Firdaus.pdf" class="w-full flex items-center justify-center gap-3 px-6 py-4 font-mono text-sm font-semibold transition-all border rounded-xl border-slate-700 bg-slate-900/50 text-slate-300 hover:bg-gradient-to-r hover:from-primary/10 hover:to-secondary/10 hover:border-primary/50 hover:text-primary group shadow-lg">
                            <svg class="w-5 h-5 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <span>Download Resume (PDF)</span>
                        </a>
                    </div>
            </div>

            {{-- Kolom Kanan: Teks & Card (Mengambil 8 kolom) --}}
            <div class="lg:col-span-8 space-y-10">
                
                {{-- Cerita Utama --}}
                <div class="space-y-6 text-slate-400 leading-relaxed text-lg">
                    <p>
                        Halo! Saya adalah seorang antusias teknologi yang saat ini sedang menempuh pendidikan di program studi <span class="text-slate-200 font-semibold">Pendidikan Informatika di STKIP PGRI Pacitan</span>. Perjalanan saya di dunia perangkat lunak didorong oleh rasa ingin tahu yang besar terhadap dekomposisi logis dan bagaimana barisan kode dapat menyelesaikan masalah dunia nyata.
                    </p>
                    <p>
                        Selain membangun aplikasi dengan ekosistem <span class="text-slate-200 font-semibold">Laravel dan Tailwind CSS</span>, saya juga memiliki pengalaman langsung di dunia pendidikan. Sebagai pengajar magang di <span class="text-slate-200 font-semibold">SMKN 1 Pacitan</span>, saya tidak hanya membagikan ilmu di kelas Informatika, tetapi juga aktif dalam kegiatan kepramukaan sekolah—di mana saya belajar banyak tentang evaluasi dinamika kelompok dan pentingnya membangun <span class="text-primary font-mono text-sm">team cohesion</span>.
                    </p>
                    <p>
                        Pendekatan saya dalam *web development* sangat dipengaruhi oleh minat saya pada riset dan sejarah lokal, seperti pendekatan *Oral History*. Saya percaya bahwa setiap aplikasi, sama seperti sejarah, harus memiliki fondasi data yang kuat dan alur cerita (UX) yang jelas bagi penggunanya.
                    </p>
                </div>

                {{-- Grid untuk Card Info (Membagi 2 di bawah teks) --}}
                <div class="grid gap-6 md:grid-cols-2">
                    
                    {{-- Card Edukasi & Pengalaman --}}
                    <div class="p-6 border rounded-xl bg-slate-900/50 border-slate-800 hover:border-primary/50 transition-colors">
                        <h3 class="mb-4 text-xl font-bold text-slate-200 flex items-center gap-2">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                            Fokus Saat Ini
                        </h3>
                        <ul class="space-y-3 text-sm text-slate-400">
                            <li class="flex items-start gap-3">
                                <span class="text-primary mt-1">▹</span><span>Pengembangan Backend dengan Laravel 13</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-primary mt-1">▹</span><span>Mempelajari Logika Pemrograman Lanjutan</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-primary mt-1">▹</span><span>Riset & Digitalisasi Sejarah (E-Arsip)</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Card Sisi Kreatif --}}
                    <div class="p-6 border rounded-xl bg-slate-900/50 border-slate-800 hover:border-secondary/50 transition-colors group">
                        <h3 class="mb-4 text-xl font-bold text-slate-200 flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary group-hover:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                            Sisi Kreatif
                        </h3>
                        <p class="text-sm text-slate-400 mb-4">
                            Melatih insting visual melalui fotografi dan berkontribusi di <span class="text-slate-200">Shutterstock</span>.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-slate-800 text-slate-300 text-xs font-mono px-2 py-1 rounded">Nature</span>
                            <span class="bg-slate-800 text-slate-300 text-xs font-mono px-2 py-1 rounded">Architecture</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection