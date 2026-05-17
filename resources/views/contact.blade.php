@extends('layouts.app')

@section('title', 'Hubungi Saya')

@section('content')

    {{-- Pop-up Toast Sukses (Dipindah ke paling atas dengan z-[100] agar tidak tertutup apapun) --}}
    @if(session('success'))
        <div id="toast-success" class="fixed bottom-8 right-8 flex items-center w-full max-w-xs p-4 space-x-3 text-slate-300 bg-slate-900 border border-emerald-500/50 rounded-xl shadow-2xl shadow-emerald-500/20 z-[100] transform transition-all duration-500" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-emerald-500 bg-emerald-900/30 rounded-lg">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
            </div>
            <div class="ml-3 text-sm font-medium">{{ session('success') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-transparent text-slate-500 hover:text-slate-300 rounded-lg p-1.5 hover:bg-slate-800 inline-flex items-center justify-center h-8 w-8 transition-colors" onclick="closeToast()" aria-label="Close">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

        <script>
            function closeToast() {
                const toast = document.getElementById('toast-success');
                if(toast) {
                    toast.classList.add('translate-y-10', 'opacity-0');
                    setTimeout(() => toast.remove(), 500);
                }
            }
            // Otomatis hilang setelah 5 detik
            setTimeout(closeToast, 5000);
        </script>
    @endif

    <section class="py-20 px-6 max-w-5xl mx-auto min-h-screen relative">
        
        <div class="mb-16 text-center">
            <p class="font-mono text-primary mb-2">Mari Berkolaborasi</p>
            <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl text-slate-100">
                Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Saya</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg text-slate-400">
                Apakah Anda memiliki proyek yang ingin didiskusikan atau sekadar ingin menyapa? Jangan ragu untuk mengirim pesan.
            </p>
        </div>

        <div class="grid gap-12 md:grid-cols-2 bg-slate-900/40 border border-slate-800 p-8 md:p-12 rounded-2xl backdrop-blur-sm shadow-xl">
            
            {{-- Kolom Kiri: Informasi Kontak (Sekarang ada 5 opsi) --}}
            <div class="space-y-8">
                <h3 class="text-2xl font-bold text-slate-200">Informasi Kontak</h3>
                
                <div class="space-y-5">
                    
                    {{-- 1. Email --}}
                    <a href="mailto:alfiannn.workspace@gmail.com" class="flex items-center gap-4 group">
                        <div class="p-3 border rounded-lg bg-slate-900 border-slate-700 group-hover:border-primary group-hover:text-primary transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="font-mono text-sm text-slate-500">Email</p>
                            <p class="text-slate-300 group-hover:text-primary transition-colors">alfiannn.workspace@gmail.com</p>
                        </div>
                    </a>

                    {{-- 2. WhatsApp --}}
                    <a href="https://wa.me/6282264072947" target="_blank" class="flex items-center gap-4 group">
                        <div class="p-3 border rounded-lg bg-slate-900 border-slate-700 group-hover:border-emerald-500 group-hover:text-emerald-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </div>
                        <div>
                            <p class="font-mono text-sm text-slate-500">WhatsApp</p>
                            <p class="text-slate-300 group-hover:text-emerald-500 transition-colors">+62 822-6407-2947</p>
                        </div>
                    </a>

                    {{-- 3. LinkedIn (BARU) --}}
                    <a href="https://linkedin.com/in/muhammad-alfiannnn" target="_blank" class="flex items-center gap-4 group">
                        <div class="p-3 border rounded-lg bg-slate-900 border-slate-700 group-hover:border-blue-400 group-hover:text-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </div>
                        <div>
                            <p class="font-mono text-sm text-slate-500">LinkedIn</p>
                            <p class="text-slate-300 group-hover:text-blue-400 transition-colors">Muhammad Alfian Firdaus</p>
                        </div>
                    </a>

                    {{-- 4. GitHub --}}
                    <a href="https://github.com/alfiannnworkspace" target="_blank" class="flex items-center gap-4 group">
                        <div class="p-3 border rounded-lg bg-slate-900 border-slate-700 group-hover:border-secondary group-hover:text-secondary transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"></path></svg>
                        </div>
                        <div>
                            <p class="font-mono text-sm text-slate-500">GitHub</p>
                            <p class="text-slate-300 group-hover:text-secondary transition-colors">@alfiannnworkspace</p>
                        </div>
                    </a>

                    {{-- 5. Instagram (BARU) --}}
                    <a href="https://instagram.com/cadleyyy" target="_blank" class="flex items-center gap-4 group">
                        <div class="p-3 border rounded-lg bg-slate-900 border-slate-700 group-hover:border-pink-500 group-hover:text-pink-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </div>
                        <div>
                            <p class="font-mono text-sm text-slate-500">Instagram</p>
                            <p class="text-slate-300 group-hover:text-pink-500 transition-colors">@cadleyyy</p>
                        </div>
                    </a>

                </div>
            </div>

            {{-- Kolom Kanan: Form --}}
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block mb-2 font-mono text-sm text-slate-400">Nama Anda</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 bg-slate-900 border @error('name') border-red-500 @else border-slate-700 @enderror rounded-lg text-slate-200 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all" placeholder="John Doe">
                    @error('name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="email" class="block mb-2 font-mono text-sm text-slate-400">Email Anda</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 bg-slate-900 border @error('email') border-red-500 @else border-slate-700 @enderror rounded-lg text-slate-200 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all" placeholder="john@example.com">
                    @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="message" class="block mb-2 font-mono text-sm text-slate-400">Pesan</label>
                    <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 bg-slate-900 border @error('message') border-red-500 @else border-slate-700 @enderror rounded-lg text-slate-200 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all resize-none" placeholder="Tuliskan pesan Anda di sini...">{{ old('message') }}</textarea>
                    @error('message') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>
                
                <button type="submit" class="w-full px-6 py-3 font-mono text-sm font-semibold transition-all rounded-md text-slate-950 bg-primary hover:bg-gradient-to-r hover:from-primary hover:to-secondary-glare hover:shadow-lg hover:shadow-primary/20">
                    Kirim Pesan
                </button>
            </form>

        </div>
    </section>
@endsection