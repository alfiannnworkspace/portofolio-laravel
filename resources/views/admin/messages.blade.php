@extends('layouts.app')

@section('title', 'Admin Dashboard - Pesan Masuk')

@section('content')
    <section class="py-20 px-6 max-w-6xl mx-auto min-h-screen">
        
        {{-- Header Admin --}}
        <div class="mb-12 flex justify-between items-end border-b border-slate-800 pb-6">
            <div>
                <p class="font-mono text-secondary mb-2">Back-Office</p>
                <h1 class="text-3xl font-bold tracking-tight text-slate-100 flex items-center gap-3">
                    Kotak Masuk
                    <span class="flex h-3 w-3 relative" title="Real-time Aktif">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                </h1>
            </div>
            
            {{-- Info & Logout Button --}}
            <div class="flex items-center gap-6">
                <div class="font-mono text-sm text-slate-500">
                    Total Pesan: <span id="total-count" class="text-primary font-bold">{{ $messages->count() }}</span>
                </div>
                
                {{-- Form Logout --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-xs font-mono px-3 py-1.5 border border-red-500/50 text-red-400 rounded hover:bg-red-900/20 transition-colors">
                        Log Out
                    </button>
                </form>
            </div>
        </div>

        {{-- Audio untuk Notifikasi (Menggunakan file suara pendek dari URL publik gratis) --}}
        <audio id="notificationSound" src="https://assets.mixkit.co/active_storage/sfx/2869/2869-preview.mp3" preload="auto"></audio>

        {{-- Tabel Pesan --}}
        <div class="bg-slate-900/50 border border-slate-800 rounded-xl overflow-hidden backdrop-blur-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-slate-300" id="messagesTable">
                    <thead class="bg-slate-900 border-b border-slate-800 font-mono text-xs uppercase text-slate-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">Pengirim</th>
                            <th scope="col" class="px-6 py-4">Isi Pesan</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody id="messagesBody" class="divide-y divide-slate-800/50">
                        @forelse($messages as $msg)
                        <tr class="hover:bg-slate-800/20 transition-colors">
                            <td class="px-6 py-4 align-top">
                                <div class="font-bold text-slate-200">{{ $msg->name }}</div>
                                <a href="mailto:{{ $msg->email }}" class="text-sm text-primary hover:underline">{{ $msg->email }}</a>
                            </td>
                            <td class="px-6 py-4 align-top">
                                <p class="text-slate-400 whitespace-pre-wrap">{{ $msg->content }}</p>
                            </td>
                            <td class="px-6 py-4 align-top whitespace-nowrap">
                                <div class="text-sm text-slate-500">
                                    {{ $msg->created_at->format('d M Y') }}
                                    <div class="text-xs mt-1">{{ $msg->created_at->format('H:i') }} WIB</div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr id="emptyState">
                            <td colspan="3" class="p-12 text-center text-slate-500">Belum ada pesan yang masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Script Real-time AJAX --}}
    <script>
        // Ambil ID pesan terakhir untuk acuan pengecekan
        let lastMessageId = {{ $messages->first()->id ?? 0 }};
        let totalCount = {{ $messages->count() }};
        
        function fetchNewMessages() {
            fetch(`/admin/messages/check?last_id=${lastMessageId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        // Mainkan suara notifikasi
                        document.getElementById('notificationSound').play().catch(e => console.log("Audio autoplay diblokir browser, klik halaman dulu."));

                        // Hapus tulisan "Belum ada pesan" jika ada
                        let emptyState = document.getElementById('emptyState');
                        if (emptyState) emptyState.remove();

                        // Masukkan pesan baru ke bagian ATAS tabel
                        const tbody = document.getElementById('messagesBody');
                        
                        data.forEach(msg => {
                            // Update ID terakhir
                            if(msg.id > lastMessageId) lastMessageId = msg.id;
                            totalCount++;

                            const newRow = document.createElement('tr');
                            newRow.className = "hover:bg-slate-800/20 transition-all duration-500 bg-emerald-900/20"; // Beri warna hijau sementara agar terlihat baru
                            
                            newRow.innerHTML = `
                                <td class="px-6 py-4 align-top">
                                    <div class="font-bold text-slate-200">${msg.name} <span class="ml-2 text-[10px] bg-emerald-500 text-slate-950 px-2 py-0.5 rounded-full font-bold">BARU</span></div>
                                    <a href="mailto:${msg.email}" class="text-sm text-primary hover:underline">${msg.email}</a>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <p class="text-slate-400 whitespace-pre-wrap">${msg.content}</p>
                                </td>
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    <div class="text-sm text-slate-500">
                                        ${msg.formatted_date}
                                        <div class="text-xs mt-1">${msg.formatted_time}</div>
                                    </div>
                                </td>
                            `;
                            
                            // Letakkan di paling atas
                            tbody.insertBefore(newRow, tbody.firstChild);

                            // Hilangkan warna hijau (highlight) setelah 3 detik
                            setTimeout(() => {
                                newRow.classList.remove('bg-emerald-900/20');
                            }, 3000);
                        });

                        // Update angka total pesan
                        document.getElementById('total-count').innerText = totalCount;
                    }
                })
                .catch(error => console.error('Error fetching messages:', error));
        }

        // Jalankan pengecekan setiap 5 detik
        setInterval(fetchNewMessages, 5000);
    </script>
@endsection