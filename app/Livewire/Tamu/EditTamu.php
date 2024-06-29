<?php

namespace App\Livewire\Tamu;

use App\Models\Tamu;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;
use Livewire\Component;

class EditTamu extends Component
{
    public $id;

    #[Validate('required', message: 'Sapaan kerabat wajib diisi')]
    public $sapaan;

    #[Validate('required', message: 'Nama wajib diisi')]
    #[Validate('min:3', message: 'Minimal nama 3 karakter')]
    public $nama;

    #[Validate('required', message: 'Alamat wajib diisi')]
    #[Validate('max:50', message: 'Maksimal alamat 50 karakter')]
    public $alamat;

    public function mount($id)
    {

        $tamu = Tamu::find($id);
        $this->sapaan = $tamu->sapaan;
        $this->nama = $tamu->nama;
        $this->alamat = $tamu->alamat;
    }

    public function update()
    {
        $this->validate();
        // Membuat slug dari variable
        $slug = Str::slug($this->sapaan . " " . $this->nama . " " . "di" . " " . $this->alamat);

        $updatetamu = Tamu::find($this->id);
        $updatetamu->sapaan = $this->sapaan;
        $updatetamu->nama = $this->nama;
        $updatetamu->alamat = $this->alamat;
        $updatetamu->slug = $slug;
        $updatetamu->save();
        session()->flash('success', 'Tamu berhasil diupdate!');
        $this->redirect('/daftar-tamu', navigate: true);
    }
    public function render()
    {
        return view('livewire.tamu.edit-tamu');
    }
}
