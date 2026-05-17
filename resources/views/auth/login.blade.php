@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
    <section class="flex flex-col justify-center min-h-[80vh] px-6">
        <div class="w-full max-w-md mx-auto">
            
            {{-- Header Form --}}
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-900 border border-slate-800 text-primary mb-4 shadow-lg shadow-primary/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-100 font-mono">Restricted Area</h1>
                <p class="text-sm text-slate-500 mt-2 font-mono">Silakan masukkan kredensial sistem.</p>
            </div>

            {{-- Form Login --}}
            <div class="bg-slate-900/50 border border-slate-800 p-8 rounded-2xl backdrop-blur-sm shadow-xl relative overflow-hidden">
                
                {{-- Efek Garis atas --}}
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>

                <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    {{-- Pesan Error Global --}}
                    @if ($errors->any())
                        <div class="p-3 bg-red-900/20 border border-red-500/50 rounded-lg">
                            <p class="text-sm text-red-400 font-mono text-center">{{ $errors->first() }}</p>
                        </div>
                    @endif

                    <div>
                        <label for="email" class="block mb-2 font-mono text-sm text-slate-400">System Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-3 bg-slate-950 border border-slate-700 rounded-lg text-slate-200 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all font-mono" placeholder="admin@domain.com">
                    </div>
                    
                    <div>
                        <label for="password" class="block mb-2 font-mono text-sm text-slate-400">Passcode</label>
                        <input type="password" id="password" name="password" required class="w-full px-4 py-3 bg-slate-950 border border-slate-700 rounded-lg text-slate-200 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all font-mono" placeholder="••••••••">
                    </div>
                    
                    <button type="submit" class="w-full px-6 py-3 font-mono text-sm font-semibold transition-all rounded-md text-slate-950 bg-primary hover:bg-gradient-to-r hover:from-primary hover:to-secondary-glare shadow-lg shadow-primary/20 flex justify-center items-center gap-2">
                        <span>Initialize Session</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </form>
            </div>

        </div>
    </section>
@endsection