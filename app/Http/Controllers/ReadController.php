<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    //informasi
    public function informasiPertama() {
        return view('read.informasiPertama');
    }
    public function pendaftaran() {
        return view('read.informasiPendaftaran');
    }
    
    //prestasi
    public function prestasiPertama() {
        return view('read.prestasiPertama');
    }
    //sejarah
    public function sejarah() {
        return view('read.sejarah');
    }

    //ekstra
    public function ekstraPramuka() {
        return view('read.ekstraPramuka');
    }
    public function ekstraPaskibra() {
        return view('read.ekstraPaskibra');
    }
    

}
