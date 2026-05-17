<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactNotification; 

class ContactController extends Controller
{
    // Method untuk menyimpan pesan dari formulir kontak
    public function store(Request $request)
    {
        // 1. Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Simpan ke database
        $newMessage = Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'content' => $validated['message'],
        ]);

        // 3. Kirim email notifikasi ke admin
        Mail::to('alfiannn.workspace@gmail.com')->send(new ContactNotification($newMessage));

        // 4. Redirect kembali dengan pesan sukses
        return back()->with('success', 'Pesan Anda berhasil dikirim! Saya akan segera merespons.');
    }

    // Method untuk menampilkan pesan di halaman admin
    public function indexAdmin()
    {
        // Mengambil semua pesan, diurutkan dari yang terbaru
        $messages = Message::latest()->get(); 
        
        return view('admin.messages', compact('messages'));
    }

    // Method untuk memeriksa pesan baru secara berkala (AJAX)
    public function checkNewMessages(Request $request)
    {
        $lastId = $request->query('last_id', 0);
        
        // Ambil pesan yang ID-nya lebih besar dari ID terakhir yang ditampilkan
        $newMessages = Message::where('id', '>', $lastId)->get()->map(function($msg) {
            // Format tanggal agar sesuai dengan tampilan tabel
            $msg->formatted_date = $msg->created_at->format('d M Y');
            $msg->formatted_time = $msg->created_at->format('H:i') . ' WIB';
            return $msg;
        });

        return response()->json($newMessages);
    }
}
