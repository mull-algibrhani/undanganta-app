<?php

namespace App\Livewire\Tamu;

use App\Models\Rsvp;
use Livewire\Component;
use Livewire\WithPagination;

class ListReservasi extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $rsvp;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $query = Rsvp::where(function ($query) {
            $query->where('nama', 'LIKE', '%' . $this->search . '%')
                ->orWhere('alamat', 'LIKE', '%' . $this->search . '%')
                ->orWhere('status', 'LIKE', '%' . $this->search . '%');
        });

        $rsvp = $query->orderBy('created_at', 'desc')->paginate($this->perPage);
        return view('livewire.tamu.list-reservasi', ['datareservasi' => $rsvp]);
    }

    public function delete($id)
    {
        $rsvp = Rsvp::find($id);
        $rsvp->delete();
        session()->flash('success', 'Data berhasil dihapus!');
        $this->redirect('/daftar-tamu-reservasi', navigate: true);
    }
}