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

  <!-- SLIDE -->
  <div class="slider">
    <div id="beranda-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
          <li data-target="#carousel-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active img-slide">
            <img src="{{ asset('public/img/slide/slide1.jpg')}}" class="img-responsive" alt="Responsive image">
          </div>
          <div class="item img-slide">
            <img src="{{ asset('public/img/slide/slide2.jpg')}}" class="img-responsive" alt="Responsive image">
          </div>
          <div class="item img-slide">
            <img src="{{ asset('public/img/slide/slide3.jpg')}}" class="img-responsive" alt="Responsive image">
          </div>
          <div class="item img-slide">
            <img src="{{ asset('public/img/slide/slide4.jpg')}}" class="img-responsive" alt="Responsive image">
          </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
    </div>
  </div>
  
  <!-- INFORMASI -->
  <div class="info-um">
    <div class="container text-center">
        <h2>Informasi</h2>
        <div class="row clearfix">
          <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="info-um-single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="draft-kaldik-2019-2020-smp-depok">
                  <img class="media-object img-info-um pull" src="{{ asset('public/img/info/Draft Kaldik 1.jpg')}}" alt=""> 
              </a>        
              <div class=" ">
                <a href="draft-kaldik-2019-2020-smp-depok">
                  <h4>Kalender Pendidikan Kota Depok Tahun Pelajaran 2019/2020</h4> 
                </a>
                <h5>Informasi Khusus</h5>  
                <h6>Informasi kalender pendidikan smp ganesa satria kota Depok tahun ajaran 2019/1020</h6>      
                <ul class="tag clearfix">
                  <li class=" pull-right "><a href="draft-kaldik-2019-2020-smp-depok">Selengkapnya</a></li>
                </ul>
              </div>                       
            </div>
          </div>  
          <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="info-um-single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="informasi-pendaftaran-smp-ganesa-satria-2019-1020">
                <img class="media-object img-info-um pull" src="{{ asset('public/img/info/form pendaftaran.jpg')}}" alt="">   
              </a> 
              <div class=" ">
                <a href="informasi-pendaftaran-smp-ganesa-satria-2019-1020">
                  <h4>Dibuka Pendaftaran SMP Ganesa Satria 2019/2020</h4>
                </a> 
                <h5>Informasi Umum</h5>  
                <h6>Mengisi formulir pendaftaran secara online</h6>      
                <ul class="tag clearfix">
                  <li class=" pull-right "><a href="informasi-pendaftaran-smp-ganesa-satria-2019-1020">Selengkapnya</a></li>
                </ul>
              </div>                       
            </div>
          </div>  
        </div>
    </div>
  </div>

@endsection