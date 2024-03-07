<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $judul= "Matakuliah Web";
        $tanggal= date("d/M/Y");

        return view('about',['judul'=>$judul, 'tanggal'=>$tanggal]);
    }
}
