<x-mail::message>
# Halo Alfian, Ada Pesan Baru!

Seseorang telah menghubungi Anda melalui form kontak di website portofolio.

**Detail Pengirim:**
* **Nama:** {{ $messageData->name }}
* **Email:** [{{ $messageData->email }}](mailto:{{ $messageData->email }})

**Isi Pesan:**
<x-mail::panel>
{{ $messageData->content }}
</x-mail::panel>

<x-mail::button :url="'mailto:' . $messageData->email">
Balas Pesan Ini
</x-mail::button>

Teruslah berkarya!
<br>
Sistem Robot Portofolio Anda
</x-mail::message>