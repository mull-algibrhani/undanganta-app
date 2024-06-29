<?php

namespace App\Livewire\Tamu;

use App\Models\Tamu;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class CreateTamu extends Component
{
    #[Validate('required', message: 'Sapaan kerabat wajib diisi')]
    public $sapaan;

    #[Validate('required', message: 'Nama wajib diisi')]
    #[Validate('min:3', message: 'Minimal nama 3 karakter')]
    public $nama;

    #[Validate('required', message: 'Alamat wajib diisi')]
    #[Validate('max:50', message: 'Maksimal alamat 50 karakter')]
    public $alamat;

    public function render()
    {
        return view('livewire.tamu.create-tamu');
    }

    public function create()
    {
        // Fungsi validasi
        $this->validate();
        // Mengambil user_id dari pengguna yang sedang login
        $user_id = auth()->user()->id;
        // Membuat slug dari variable
        $slug = Str::slug($this->sapaan . " " . $this->nama . " " . "di" . " " . $this->alamat);
        // Simpan data ke database
        Tamu::create([
            'user_id' => $user_id,
            'sapaan' => $this->sapaan,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'slug' => $slug,
        ]);
        session()->flash('success', 'Tamu berhasil ditambahkan!');
        $this->redirect('/daftar-tamu', navigate: true);
    }
}