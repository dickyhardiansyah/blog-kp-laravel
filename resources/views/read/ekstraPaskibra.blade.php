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
              <li role="presentation"><a href="index" >Beranda</a></li>
              <li role="presentation"><a href="profil">Profil</a></li>
              <li role="presentation"><a href="informasi" class="active">Informasi Sekolah</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
</header>
<div class="read">
    <div class="container">
      <h3>
        <a href="informasi">Informasi Sekolah</a> &raquo; 
        <a href="informasi">Ekstrakulikuler</a>
      </h3>
      <hr>    
      <div class="text-center">
        <h2>Galeri Ekstra Paskibra</h2>
        <br>
        <div class="col-md-5 col-sm-6">
            <iframe width="400" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/k_49t5_FO1Y" allowfullscreen></iframe>
        </div>
        
      </div>
    </div>
</div>
<br><br><br>


@endsection