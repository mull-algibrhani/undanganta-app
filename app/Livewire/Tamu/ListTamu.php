<?php

namespace App\Livewire\Tamu;

use App\Models\Tamu;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListTamu extends Component
{
    public $search;
    public $tamus;

    public function mount()
    {
        // Mengambil data posts berdasarkan user_id dari pengguna yang sedang login
        $this->tamus = Tamu::where('user_id', Auth::id())->get();
    }
    public function render()
    {
        $this->tamus = Tamu::where('nama', 'LIKE', '%' . $this->search . '%')->orWhere('alamat', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.tamu.list-tamu', ['datatamu' => $this->tamus]);
    }

    public function delete($id)
    {
        $tamu = Tamu::find($id);
        $tamu->delete();
        session()->flash('success', 'Tamu berhasil dihapus!');
        $this->redirect('/daftar-tamu', navigate: true);
    }
}
