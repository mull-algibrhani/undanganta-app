<?php

namespace App\Livewire\Tamu;

use App\Models\Rsvp;
use Livewire\Component;

class ListReservasi extends Component
{
    public $search;
    public $rsvp;

    public function render()
    {
        $this->rsvp = Rsvp::where('nama', 'LIKE', '%' . $this->search . '%')->orWhere('alamat', 'LIKE', '%' . $this->search . '%')->orWhere('status', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.tamu.list-reservasi', ['datareservasi' => $this->rsvp]);
    }

    public function delete($id)
    {
        $rsvp = Rsvp::find($id);
        $rsvp->delete();
        session()->flash('success', 'Data berhasil dihapus!');
        $this->redirect('/daftar-tamu-reservasi', navigate: true);
    }
}
