<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = DB::table('pendaftaran')->get();
        return view('form.pendaftaran',['pendaftaran' => $pendaftaran]);
 
    }

    public function tambah()
    {
        return view('form.tambah');
    }

    public function proses(Request $request)
    {
        DB::table('pendaftaran')->insert([
            'tanggal_daftar' => now(),
            'nama_siswa' => $request->nama_siswa,
            'tempat_lahir' => $request->tempat_lahir,            
            'tanggal_lahir' => $request->tanggal_lahir,            
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'alamat' => $request->alamat,
            'rtrw' => $request->rtrw,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'no_telp' => $request->no_telp,
            'asal_sekolah' => $request->asal_sekolah,
            'nama_ayah' => $request->nama_ayah,
            'tempat_lahir_a' => $request->tempat_lahir_a,
            'tanggal_lahir_a' => $request->tanggal_lahir_a,
            'pekerjaan_a' => $request->pekerjaan_a,
            'penghasilan_a' => $request->penghasilan_a,
            'nama_ibu' => $request->nama_ibu,
            'tempat_lahir_i' => $request->tempat_lahir_i,
            'tanggal_lahir_i' => $request->tanggal_lahir_i,
            'pekerjaan_i' => $request->pekerjaan_i,
            'penghasilan_i' => $request->penghasilan_i,
            'nama_wali' => $request->nama_wali,
            'tempat_lahir_w' => $request->tempat_lahir_w,
            'tanggal_lahir_w' => $request->tanggal_lahir_w,
            'pekerjaan_w' => $request->pekerjaan_w
        ]);
        return redirect('verifikasi-formulir-pendaftaran-smp-ganesa-satria-2019-1020');
 
    }
}
