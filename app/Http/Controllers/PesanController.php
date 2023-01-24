<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        $pesan = new Pesan();
        $pesan->name = $request->nama;
        $pesan->no_identitas = $request->no_identitas;
        $pesan->no_hp = $request->no_hp;
        $pesan->tempat_wisata = $request->wisata;
        $pesan->tgl_kunjungan = $request->tgl_kunjungan;
        $pesan->pengunjung_dewasa = $request->pengunjung_dewasa;
        $pesan->pengunjung_anak = $request->pengunjung_anak;
        $pesan->total = $request->total;
        $pesan->save();

        // dd($pesan);
        // $request->validate([
        //     'name' => 'required',
        //     'no_identitas' => 'required|numeric|min:16',
        //     'no_hp' => 'required|numeric',
        //     'tempat_wisata' => 'required|numeric|min:16',
        //     'tgl_kunjungan' => 'required',
        //     'pengunjung_dewasa' => 'required|numeric',
        //     'pengunjung_anak' => 'required|numeric',
        //     'total' => 'required|numeric',
        //     'lansia' => 'numeric'
        // ]);

        // $pesan = Pesan::create([
        //     'name' => $request->name,
        //     'no_identitas' => $request->no_identitas,
        //     'no_hp' => $request->no_hp,
        //     'tempat_wisata' => $request->tempat_wisata,
        //     'tgl_kunjungan' => $request->tgl_kunjungan,
        //     'pengunjung_dewasa' => $request->pengunjung_dewasa,
        //     'pengunjung_anak' => $request->pengunjung_anak,
        //     'total' => $request->total,
        // ]);
        // dd($pesan);


        return view('tiket', compact('pesan'));
    }
}
