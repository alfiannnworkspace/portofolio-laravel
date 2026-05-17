@extends('layouts.app')

@section('title', 'Detail Proyek - PancerPOS')

@section('content')
    <section class="py-20 px-6 max-w-5xl mx-auto min-h-screen">
        
        {{-- Tombol Kembali --}}
        <div class="mb-8">
            <a href="{{ route('projects.index') }}" class="font-mono text-sm text-primary hover:text-secondary transition-colors flex items-center gap-2">
                &larr; Kembali ke Semua Proyek
            </a>
        </div>

        {{-- Header Proyek --}}
        <div class="mb-12">
            <div class="flex flex-wrap gap-2 mb-4 font-mono text-xs">
                <span class="bg-slate-900 border border-slate-800 text-primary px-3 py-1 rounded-full">Laravel 12</span>
                <span class="bg-slate-900 border border-slate-800 text-secondary px-3 py-1 rounded-full">Tailwind CSS</span>
                <span class="bg-slate-900 border border-slate-800 text-emerald-400 px-3 py-1 rounded-full">MySQL Database</span>
            </div>
            <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl text-slate-100 mb-4">
                SIM Transaksi & Pemesanan UMKM Pantai Pancer Door - PancerPOS
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed max-w-3xl">
                Sistem Informasi Manajemen transaksi dan operasional digital yang dirancang khusus untuk mendukung efisiensi bisnis pelaku UMKM di kawasan wisata Pantai Pancer Door.
            </p>
        </div>

        {{-- Grid Info Utama & Spesifikasi --}}
        <div class="grid gap-8 md:grid-cols-3 mb-16">
            <div class="p-6 bg-slate-900/30 border border-slate-800/80 rounded-xl">
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Peran Saya</h4>
                <p class="text-slate-200 font-semibold">Fullstack Developer</p>
            </div>
            <div class="p-6 bg-slate-900/30 border border-slate-800/80 rounded-xl">
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Kategori</h4>
                <p class="text-slate-200 font-semibold">Web Application / MIS</p>
            </div>
            <div class="p-6 bg-slate-900/30 border border-slate-800/80 rounded-xl">
                <h4 class="font-mono text-xs text-slate-500 uppercase mb-1">Tahun Pengembangan</h4>
                <p class="text-slate-200 font-semibold">2025 - Sekarang</p>
            </div>
        </div>

        {{-- Konten Utama / Studi Kasus --}}
        <div class="space-y-12 text-slate-400 text-lg leading-relaxed">
            
            {{-- Latar Belakang & Masalah --}}
            <section class="space-y-4">
                <h3 class="text-2xl font-bold text-slate-100 flex items-center gap-3">
                    <span class="text-primary font-mono text-xl">01.</span> Latar Belakang & Tantangan
                </h3>
                <p>
                    Pelaku usaha mikro di kawasan wisata seringkali menghadapi kendala dalam pencatatan transaksi keuangan yang masih bersifat konvensional/manual. Hal ini memicu potensi kesalahan rekapitulasi data stok barang dan ketidakakuratan laporan keuntungan harian.
                </p>
                <p>
                    Tantangan utama dari proyek ini adalah merancang sistem entri data yang sangat responsif, ringan dijalankan di perangkat *mobile* milik pedagang, serta memiliki struktur basis data yang optimal untuk menangani relasi multi-toko.
                </p>
            </section>

            {{-- Fitur-Fitur Utama --}}
            <section class="space-y-6">
                <h3 class="text-2xl font-bold text-slate-100 flex items-center gap-3">
                    <span class="text-secondary font-mono text-xl">02.</span> Fitur-Fitur Unggulan Sistem
                </h3>
                
                <div class="grid gap-6 md:grid-cols-2">
                    {{-- Fitur 1 --}}
                    <div class="p-6 border border-slate-800/60 bg-slate-900/20 rounded-xl space-y-2">
                        <div class="text-primary font-mono text-sm font-bold">[ Manajemen Transaksi Real-time ]</div>
                        <p class="text-sm text-slate-400">Pencatatan kas masuk dan keluar secara instan dengan otomatisasi kalkulasi kembalian, pajak, dan diskon operasional.</p>
                    </div>
                    {{-- Fitur 2 --}}
                    <div class="p-6 border border-slate-800/60 bg-slate-900/20 rounded-xl space-y-2">
                        <div class="text-primary font-mono text-sm font-bold">[ Pemodelan Database Stok Dinamis ]</div>
                        <p class="text-sm text-slate-400">Sistem manajemen inventaris yang otomatis memotong jumlah stok barang ketika terjadi transaksi penjualan (pemicu *database trigger* via Eloquent).</p>
                    </div>
                    {{-- Fitur 3 --}}
                    <div class="p-6 border border-slate-800/60 bg-slate-900/20 rounded-xl space-y-2">
                        <div class="text-primary font-mono text-sm font-bold">[ Dashboard Analisis Keuntungan ]</div>
                        <p class="text-sm text-slate-400">Penyajian grafik rekap pendapatan harian, mingguan, hingga bulanan guna mempermudah pemilik UMKM mengambil keputusan bisnis.</p>
                    </div>
                    {{-- Fitur 4 --}}
                    <div class="p-6 border border-slate-800/60 bg-slate-900/20 rounded-xl space-y-2">
                        <div class="text-primary font-mono text-sm font-bold">[ Desain Antarmuka Mobile-First ]</div>
                        <p class="text-sm text-slate-400">Dibangun menggunakan utilitas kelas Tailwind CSS untuk memastikan performa tampilan yang presisi di layar ponsel pintar (*smartphone*).</p>
                    </div>
                </div>
            </section>

            {{-- Arsitektur Teknis --}}
            <section class="space-y-4">
                <h3 class="text-2xl font-bold text-slate-100 flex items-center gap-3">
                    <span class="text-primary font-mono text-xl">03.</span> Pendekatan Arsitektur Kode
                </h3>
                <p>
                    Sistem ini dibangun dengan memanfaatkan kekuatan arsitektur MVC bawaan <span class="text-slate-200 font-semibold">Laravel</span>. Proses integrasi manipulasi data atau aset gambar (seperti logo produk UMKM) dioptimalkan agar tidak membebani kapasitas penyimpanan server.
                </p>
                <p>
                    Di sisi basis data, relasi antar tabel (seperti `users`, `shops`, `products`, dan `transactions`) dirancang menggunakan aturan *foreign key constraints* yang ketat guna menjaga integritas data keuangan saat terjadi penghapusan data bertingkat (*cascading*).
                </p>
            </section>

        </div>
    </section>
@endsection