<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //navigasi bar
    public function index() {
        return view('index');
    }

    public function profil() {
        return view('pages.profil');
    }
    
    public function informasi() {
        return view('pages.informasi');
    }

    public function pendaftaran() {
        return view('pages.pendaftaran');
    }

    public function kontak() {
        return view('pages.kontak');
    }

}
