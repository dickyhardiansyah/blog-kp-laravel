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
            <a href="index">
              <h1>SMP Ganesa Satria</h1>
            </a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index">Beranda</a></li>
              <li role="presentation"><a href="profil">Profil</a></li>
              <li role="presentation"><a href="informasi">Informasi Sekolah</a></li>
              <li role="presentation"><a href="pendaftaran" class="active">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  
  <section id="about-us">
    <div class="container">
      <div class="team">
        <div class="text-center wow fadeInDown padding-bot">
          <h2>PENDAFTARAN SISWA BARU SMP GANESA SATRIA</h2>
        </div>
        <br>
        <div class="row clearfix">
          <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media text-center">       
                <h3>Jadwal Pendaftaran</h3>    
              </div>
              <hr>
              <p>Gelombang I (1 Maret - 30 April)</p>
              <p>Gelombang II (1 Mei - 30 Juni)</p>
              <p>Gelombang III (1 Juli - 30 Juli)</p>
              <br>
              <p>Senin - Sabtu 07.00 - 17.00 WIB</p>
              <p>Gedung SMP Ganesa Satria</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media text-center">       
                <h3>Syarat Pendaftaran</h3>    
              </div>
              <hr>
              <p>Membayar Uang Pendaftaran</p>
              <p>Fotocopy Ijazah dan SKHUN SD/MI</p>
              <p>Fotocopy KK, Akte dan KTP Orang Tua</p>
              <p>Pas Foto Terbaru Ukuran 2X3 (4 Lembar)</p>
              <p>Pas Foto Terbaru Ukuran 3X4 (4 Lembar)</p>
              <p>KIP, KIS, KKS (bila ada)</p>
            </div>
          </div>
        </div>

        <div class="row pres-sk-bar">
          <div class="first-one-arrow hidden-xs">
            <hr>
          </div>
          <div class="first-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="second-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
          <div class="third-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="fourth-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
        </div>
        <!--skill_border-->

        <div class="row clearfix">
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="media text-center">       
                <h3>Jadwal Masuk Tahun Ajaran baru</h3>    
              </div>
              <hr>
              <p>Senin, 10 September 2019</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="media text-center">       
                <h3>Kontak</h3>    
              </div>
              <hr>
              <p>Indah : 085817450273</p>
              <p>Sinta : 085817450273</p>
              <p>Sekolah : 085817450273</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection