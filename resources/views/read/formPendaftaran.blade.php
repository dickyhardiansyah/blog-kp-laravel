@extends('layout.master')
@section('content')

<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <div class="pull-left">
              <a href="index"><img class="img-nav" src="{{ asset('public/img/icon/ganesa.png')}}" alt=""></a>
            </div>
            <a href="index"><h1>SMP Ganesa Satria</h1></a>
          </div>  
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index" class="active">Beranda</a></li>
              <li role="presentation"><a href="profil">Profil</a></li>
              <li role="presentation"><a href="informasi">Informasi Sekolah</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
</header>

  <section >
    <div class="container ">
      <h3>
        <a href="index">Beranda</a> &raquo; 
        <a href="index">Informasi</a>
        </h3>
      <hr>
      <p> Siswa Yang Telah Terdaftar Dapat Mengunjungi Link
      <a href="http://localhost/daftarsmplaravel/data" class="text-primary">http://localhost/daftarsmplaravel/data</a> </p>
      </p>
      <div class="pendaftaran">        
        <div class="wow fadeInDown">
          <h2>Form Pendaftaran Online</h2><br>     
                 
          <div class="row contact-wrap">
            <div class="col-md-6 col-md-offset-3">
              <h3>Data Pribadi</h3>
              <form action="form-pendaftaran/proses" method="post" role="form" class="form-row">
                {{ csrf_field() }}
                <div class="">
                  <h5>Nama Lengkap</h5>
                  <input type="text" name="nama_siswa" class="form-control" required="require" placeholder="Nizar"/>
                </div>  
                <div class="form-row">
                  <div class="col-md-6">
                    <h5>Tempat Lahir</h5>
                    <input type="text" name="tempat_lahir" class="form-control" required="require" placeholder="Bandung"/>
                  </div>  
                  <div class="form-group col-md-6">
                    <h5>Tanggal Lahir</h5>
                    <input type="date" name="tanggal_lahir" class="form-control" required="require" placeholder=""/>
                  </div>  
                </div>
                <div class="">
                  <h5>NISN</h5>
                  <input type="number" name="nisn" class="form-control" required="require" placeholder="1234567"/>
                </div>  
                <div class="">
                  <h5>Jenis Kelamin</h5>
                  <select name="jenis_kelamin" class="form-control" required="require">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="Perempaun">Perempuan</option>
                  </select>
                </div>            
                <div class="">
                  <h5>Agama</h5>
                  <select name="agama" class="form-control" required="require">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen Protestan</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Kong Hu Cu</option>
                  </select>
                </div> 
                <div class="">
                  <h5>Anak Ke</h5>
                  <input type="number" name="anak_ke" class="form-control" required="require" placeholder="0"/>
                </div> 
                <div class="">
                  <h5>Alamat Rumah</h5>
                  <input type="text" name="alamat" class="form-control" required="require" placeholder="Jl Tubagus Ismail"/>
                </div>                                
                <div class=" col-md-3">
                  <h5>RT/RW</h5>
                  <input type="text" class="form-control" name="rtrw" placeholder="01/07" required="require">
                </div>
                <div class="col-md-4">
                  <h5>Kelurahan</h5>
                  <input type="text" class="form-control" name="kelurahan" placeholder="Lebak Gede" required="require">
                </div>
                <div class=" col-md-5">
                  <h5>Kecamatan</h5>
                  <input type="text" class="form-control" name="kecamatan" placeholder="Coblong" required="require">
                </div>
                <div class=" col-md-5">
                  <h5>Kota</h5>
                  <input type="text" class="form-control" name="kota" placeholder="Bandung" required="require">
                </div>
                <div class="col-md-4">
                  <h5>Provinsi</h5>
                  <input type="text" class="form-control" name="provinsi" placeholder="Jawa Barat">
                </div>
                <div class="form-group col-md-3">
                  <h5>Kode Pos</h5>
                  <input type="text" class="form-control" name="kode_pos" placeholder="12345" required="require">
                </div>
                <div class="">
                  <h5>No Telp</h5>
                  <input type="number" name="no_telp" class="form-control" required="require" placeholder="085864545556" required="require"/>
                </div>
                <div class="">
                  <h5>Asal Sekolah</h5>
                  <input type="text" name="asal_sekolah" class="form-control" required="require" placeholder="SDN 1 Bandung" required="require"/>
                </div>
                <hr>
                <h3>Data Keluarga</h3>
                <h4>Orang Tua Kandung</h4>
                <div class="">
                  <h5>Nama Lengkap Ayah</h5>
                  <input type="text" name="nama_ayah" class="form-control" placeholder="Bambang"/>
                </div>  
                <div class="form-row">
                  <div class="col-md-6">
                    <h5>Tempat Lahir</h5>
                    <input type="text" name="tempat_lahir_a" class="form-control" placeholder="Bandung"/>
                  </div>  
                  <div class="form-group col-md-6">
                    <h5>Tanggal Lahir</h5>
                    <input type="date" name="tanggal_lahir_a" class="form-control" placeholder=""/>
                  </div>  
                </div>
                <div class="">
                  <h5>Pekerjaan</h5>
                  <select name="pekerjaan_a" class="form-control">
                    <option value="pns">PNS</option>
                    <option value="guru">Guru</option>
                    <option value="dosen">Dosen</option>
                    <option value="ustadz">Ustadz/Mubaligh</option>
                    <option value="wiraswasta">Wiraswasta</option>
                    <option value="petani">Petani</option>
                    <option value="TNI">TNI</option>
                    <option value="kepolisian">Kepolisian RI</option>
                    <option value="nelayan">Nelayan</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="lainya">Lainya</option>
                  </select>
                </div>  
                <div class="">
                  <h5>Penghasilan</h5>
                  <select name="penghasilan_a" class="form-control">
                    <option value="Kurang dari Rp 1000000">Kurang dari Rp 1000000</option>
                    <option value="Rp 1000000 - Rp 3000000">Rp 1000000 - Rp 3000000</option>
                    <option value="Rp 3000000- Rp 5000000">Rp 3000000 - Rp 5000000</option>
                    <option value="Lebih dari Rp 5000000">Lebih dari Rp 5000000</option>
                  </select>
                </div>  
                
                <div class="">
                  <h5>Nama Lengkap Ibu</h5>
                  <input type="text" name="nama_ibu" class="form-control" placeholder="Ani"/>
                </div>  
                <div class="form-row">
                  <div class="col-md-6">
                    <h5>Tempat Lahir</h5>
                    <input type="text" name="tempat_lahir_i" class="form-control" placeholder="Bandung"/>
                  </div>  
                  <div class="form-group col-md-6">
                    <h5>Tanggal Lahir</h5>
                    <input type="date" name="tanggal_lahir_i" class="form-control" placeholder=""/>
                  </div>  
                </div>
                <div class="">
                  <h5>Pekerjaan</h5>
                  <select name="pekerjaan_i" class="form-control">
                    <option value="-">-</option>
                    <option value="pns">PNS</option>
                    <option value="guru">Guru</option>
                    <option value="dosen">Dosen</option>
                    <option value="ustadz">Ustadz/Mubaligh</option>
                    <option value="wiraswasta">Wiraswasta</option>
                    <option value="petani">Petani</option>
                    <option value="TNI">TNI</option>
                    <option value="kepolisian">Kepolisian RI</option>
                    <option value="nelayan">Nelayan</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="lainya">Lainya</option>
                  </select>
                </div>  
                <div class="">
                  <h5>Penghasilan</h5>
                  <select name="penghasilan_i" class="form-control">
                    <option value="Kurang dari Rp 1000000">Kurang dari Rp 1000000</option>
                    <option value="Rp 1000000 - Rp 3000000">Rp 1000000 - Rp 3000000</option>
                    <option value="Rp 3000000- Rp 5000000">Rp 3000000 - Rp 5000000</option>
                    <option value="Lebih dari Rp 5000000">Lebih dari Rp 5000000</option>
                  </select>
                </div> 
                <br>
                <h4>Orang Tua Wali Murid</h4>
                <div class="">
                  <h5>Nama Wali Murid</h5>
                  <input type="text" name="nama_wali" class="form-control" placeholder="Bambang"/>
                </div>  
                <div class="form-row">
                  <div class="col-md-6">
                    <h5>Tempat Lahir</h5>
                    <input type="text" name="tempat_lahir_w" class="form-control" placeholder="Bandung"/>
                  </div>  
                  <div class="form-group col-md-6">
                    <h5>Tanggal Lahir</h5>
                    <input type="date" name="tanggal_lahir_w" class="form-control" placeholder=""/>
                  </div>  
                </div>
                <div class="">
                  <h5>Pekerjaan</h5>
                  <select name="pekerjaan_w" class="form-control">
                  <option value="-">-</option>
                    <option value="pns">PNS</option>
                    <option value="guru">Guru</option>
                    <option value="dosen">Dosen</option>
                    <option value="ustadz">Ustadz/Mubaligh</option>
                    <option value="wiraswasta">Wiraswasta</option>
                    <option value="petani">Petani</option>
                    <option value="TNI">TNI</option>
                    <option value="kepolisian">Kepolisian RI</option>
                    <option value="nelayan">Nelayan</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="lainya">Lainya</option>
                  </select>
                </div>                   
                <br>            
                <div class="form-group text-center">
                  <button type="submit" name="submit" class="btn btn-dark btn-lg" required="required"><a>Simpan Data</a></button>
                </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection