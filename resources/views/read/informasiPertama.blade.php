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
      <div class="struktur">
        <h3>
          <a href="index">Beranda</a> &raquo; 
          <a href="index">Informasi</a>
        </h3>
        <hr>
        <div class="text-center wow fadeInDown">
            <h2>Kalender Pendidikan Kota Depok Tahun Pelajaran 2019/2020</h2><br>
            <div class="text-center wow fadeInDown">
                <img src="{{ asset('public/img/info/Draft Kaldik 1.jpg')}}" width="100%" height="100%">
            </div>
            <div class="text-center wow fadeInDown">
                <img src="{{ asset('public/img/info/Draft Kaldik 2.jpg')}}" width="100%" height="100%">
            </div>
            <div class="text-center wow fadeInDown">
                <img src="{{ asset('public/img/info/Draft Kaldik 3.jpg')}}" width="100%" height="100%">
            </div>
            <br><br><br>
            <div class="text-center wow fadeInDown">
                <img src="{{ asset('public/img/info/Draft Kaldik 4.jpg')}}" width="100%" height="100%">
            </div>
            <div class="text-center wow fadeInDown">
                <img src="{{ asset('public/img/info/Draft Kaldik 5.jpg')}}" width="100%" height="100%">
            </div>
        </div>
      </div>
    </div>
  </section>


@endsection