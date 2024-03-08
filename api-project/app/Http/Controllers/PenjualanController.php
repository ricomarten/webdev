<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index(){
        $penjualan = Penjualan::get();
        
        return view("/penjualan",['data'=>$penjualan]);
    }
    public function store(Request $request)
    {
        $penjualan = new Penjualan;
        $penjualan->kodebarang = $request->kodebarang;
        $penjualan->namabarang = $request->namabarang;
        $penjualan->harga = $request->harga;
        $penjualan->stok = $request->stok;

        $insert=$penjualan->save();
        if($insert){
            return back()->with('message','Data berhasil ditambah');
        }else{
 
        return back()->with('error','Data Gagal ditambah');
        }
    }
}
