<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        if($data){
            $pesan = "berhasil ambil data";
        } else {
            $pesan= "gagal ambil data"; 
        }

        return response()->json(
            ['message'=>$pesan,
            'data'=>$data
        ]);
    }
    public function simpan(Request $request)
    {
        $a = mt_rand(0000,9999);
        $idp = "ID-P".$a;
        $nama_produk = $request->nama_produk;
        $deskripsi = $request->deskripsi;
        $alamat = $request->alamat;
        $foto_produk = $request->foto_produk;

        $sql = Produk::create([
            'idp' => $idp,
            'nama_produk' => $nama_produk,
            'deskripsi'=>$deskripsi,
            'alamat'=>$alamat,
            'foto_produk'=>$foto_produk,
        ]);

        if($sql)
        {
            $pesan = "berhasil";
        } else 
        {
            $pesan = "gagal";
        }

        return response()->json(['message'=>$pesan]);
    }
}
