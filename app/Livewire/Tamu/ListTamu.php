<?php

namespace App\Livewire\Tamu;

use App\Models\Tamu;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListTamu extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Tamu::where('user_id', Auth::id())
            ->where(function ($query) {
                $query->where('nama', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('alamat', 'LIKE', '%' . $this->search . '%');
            });

        $tamus = $query->orderBy('created_at', 'desc')->paginate($this->perPage);

        return view('livewire.tamu.list-tamu', ['datatamu' => $tamus]);
    }

    public function delete($id)
    {
        $tamu = Tamu::find($id);
        if ($tamu && $tamu->user_id === Auth::id()) {
            $tamu->delete();
            session()->flash('success', 'Tamu berhasil dihapus!');
            $this->redirect('/daftar-tamu', navigate: true);
        } else {
            session()->flash('error', 'Tamu tidak ditemukan atau Anda tidak memiliki izin untuk menghapusnya.');
        }
    }
}
