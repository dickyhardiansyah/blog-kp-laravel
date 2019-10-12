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
      <div class="struk-pendaf">
        <hr>
        <div class="text-center wow fadeInDown">
            <h2>Informasi Pendaftaran SMP Ganesa Satria Tahun 2019-2020</h2><br>
            <div class="text-left wow fadeInDown">
                <p>Silahkan kunjungi link berikut untuk melakukkan PENDAFTARAN ONLINE</p>
                <p class="link"><a href="http://pendaftaranganesa.epizy.com"> www.pendaftaransmpganesasatria.com</a></p>
            </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </section>


@endsection