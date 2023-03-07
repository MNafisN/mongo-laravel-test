<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use Session;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('Kendaraan')->with('vehicles', $kendaraan);
    }

    public function TambahKendaraan(Request $request)
    {
        $this->validate($request, [
            'inputTahunKeluaran' => 'required',
            'inputWarna' => 'required',
            'inputHarga' => 'required',
            'inputJumlahStok' => 'required'
        ]);

        $kendaraan = new Kendaraan();
        // $kendaraan->kendaraanId = (int)$request->inputNoKendaraan;
        $kendaraan->tahunKeluaran = (int)$request->inputTahunKeluaran;
        $kendaraan->warna = $request->inputWarna;
        $kendaraan->harga = (int)$request->inputHarga;
        $kendaraan->jumlahStok = (int)$request->inputJumlahStok;

        $kendaraan->save();

        return redirect('/Kendaraan')->with('message', 'Kendaraan telah ditambahkan!');
    }

    public function EditKendaraan($id)
    {
        $kendaraan = Kendaraan::find($id);

        return view('Kendaraan.editKendaraan', ['kendaraan'=>$kendaraan]);
    }

    public function UpdateKendaraan(Request $request)
    {
        $kendaraan = Kendaraan::find($request->id);

        // $kendaraan->kendaraanId = (int)$request->inputNoKendaraan;
        $kendaraan->tahunKeluaran = (int)$request->inputTahunKeluaran;
        $kendaraan->warna = $request->inputWarna;
        $kendaraan->harga = (int)$request->inputHarga;
        $kendaraan->jumlahStok = (int)$request->inputJumlahStok;

        $kendaraan->save();

        return redirect('/Kendaraan')->with('message', 'Kendaraan telah diperbarui!');
    }

    public function HapusKendaraan($id)
    {
        $kendaraan = Kendaraan::find($id);

        $kendaraan->delete();

        return redirect('/Kendaraan')->with('message', 'Kendaraan berhasil dihapus!');
    }
}
