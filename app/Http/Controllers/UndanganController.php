<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use App\Models\Tamu;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function sigle_undangan($slug)
    {
        $tamu = Tamu::where('slug', '=', $slug)->first();
        return view('adi-dan-risma', compact('tamu'));
    }

    public function save_rsvp(Request $rsvp)
    {
        //Validasi
        // pesan error kustom
        $messages = [
            'required' => 'Wajib diisi',
            'max' => 'Maksimal 5',
            'min' => 'Status tidak boleh kosong',
        ];
        // Validasi data dengan pesan error kustom
        $validatedData = $rsvp->validate([
            'nama' => 'required',
            'jumlah' => 'required|max:5',
            'status' => 'required|min:1',
            'alamat' => 'required',
            'id' => 'required',
        ], $messages);
        //End Validasi
        // Pengecekan apakah ID dan Nama tamu ada di tabel Tamu
        $cektamu = Tamu::where('id', $validatedData['id'])
            ->where('nama', $validatedData['nama'])
            ->first();
        $cekrsvpexist = Rsvp::where('rsvp_id', $validatedData['id'])->exists();
        if (!$cektamu) {
            return response()->json(['success' => 'Maaf anda tidak terdaftar pada buku tamu.']);
        }
        if ($cekrsvpexist) {
            return response()->json(['success' => 'Sudah reservasi.']);
        }
        $save_rsvp = new Rsvp;
        $save_rsvp->nama = $validatedData['nama'];
        $save_rsvp->jumlah = $validatedData['jumlah'];
        $save_rsvp->status = $validatedData['status'];
        $save_rsvp->alamat = $validatedData['alamat'];
        $save_rsvp->rsvp_id = $validatedData['id'];
        $save_rsvp->save();
        return response()->json(['success' => 'Reservasi berhasil dikirim']);
    }
}
