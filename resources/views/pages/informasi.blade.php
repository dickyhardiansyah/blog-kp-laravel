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
              <li role="presentation"><a href="informasi" class="active">Informasi Sekolah</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- PRESTASI SEKOLAH -->
  <div class="pres-sk">
    <div class="container">
      <div class="text-center wow fadeInDown">
        <h2>PRESTASI SEKOLAH</h2>
        <div class="row clearfix">
          <div class="col-md-12">
            <div class="pres-sk-single-profile-top wow fadeInDown  " data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="smp-ganesa-satria-depok-juara-pertama-lomba-pmr-madya"><img class="img-pres-sk img-responsive" src="{{ asset('public/img/info/juarapmr.jpg')}}" alt=""></a>       
                <a href="smp-ganesa-satria-depok-juara-pertama-lomba-pmr-madya"><h4>SMP Ganesa Satria Depok Juara Pertama Lomba PMR Madya</h4> </a>
                <h5>Minggu, 05 Maret 2017</h5>  
                <h6>Swara Pendidikan.co.id – (SUKMAJAYA, DEPOK) – Prestasi    membanggakan kembali diraih siswa  Sekolah 
                  Menengah Pertama (SMP) Ganesa Satria, Depok 2 Tengah dengan meraih juara pertama Lomba Palang Merah Remaja 
                  (PMR) Madya kategori ketangkasan tandu putra pada Minggu (5/3/17) lalu di lapangan SMK Perintis Depok.....
                </h6>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- EKSTRAKULIKULER -->
  <div class="gallery">
    <div class="text-center">
      <h2>EKSTARKULIKULER</h2>
    </div>
    <div class="container">
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <img src="{{ asset('public/img/ekstra/futsal.jpg')}}" alt="" class="img-responsive" />
            <h4>Futsal</h4>
        </figure>
      </div>
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <img src="{{ asset('public/img/ekstra/marchingband.jpg')}}" alt="" class="img-responsive" />
            <h4>Marching Band</h4>
        </figure>
      </div>
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <a href="galeri-ekstra-pramuka">
            <img src="{{ asset('public/img/ekstra/pramuka.jpg')}}" alt="" class="img-responsive" />
            <h4>Pramuka</h4>
          </a>  
        </figure>
      </div>
    </div>
    <div class="container">
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <a href="galeri-ekstra-paskibra">
            <img src="{{ asset('public/img/ekstra/paskibra.jpg')}}" alt="" class="img-responsive" />
            <h4>PASKIBRA  </h4>
          </a>
        </figure>
      </div>
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <img src="{{ asset('public/img/ekstra/pmr.jpg')}}" alt="" class="img-responsive" />
            <h4>PMR</h4>
        </figure>
      </div>
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <img src="{{ asset('public/img/ekstra/taekwondo.jpg')}}" alt="" class="img-responsive" />
            <h4>Taekwondo</h4>
        </figure>
      </div>
    </div>
    <div class="container">
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <img src="{{ asset('public/img/ekstra/tari.jpg')}}" alt="" class="img-responsive" />
            <h4>Tari</h4>
        </figure>
      </div>
      <div class="col-md-4 col-sm-4">
        <figure class="effect-marley">
          <img src="{{ asset('public/img/ekstra/marawis.jpg')}}" alt="" class="img-responsive" />
            <h4>Marawis</h4>
        </figure>
      </div>
    </div>
  </div>

  <!-- Fasilitas -->
  <section id="fasilitas">
    <div class="container fasilitas ">
      <div class="text-center wow fadeInDown">
        <h2>FASILITAS</h2>
        <p>Fasilitas yang mendukung akan sangat membantu kualitas pendidikan. SMP Ganesa Satria terus berupaya melengkapi Fasilitas pendidikan sesuai dengan kebutuhan</p>
        <div class="skill-wrap clearfix">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="lap-olahraga">
                  <p>Lapangan Olahraga</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="kesenian">
                  <p>Kesenian</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="lap-upacara">
                  <p>Lapangan Upacara</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="perpus">
                  <p>Perpustakaan</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="lab-ipa">
                  <p>Lab IPA</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="lab-komputer">
                  <p>Lab Komputer</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="aula">
                  <p>Aula</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="musola">
                  <p>Musola</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="struktur">
        <div class="text-center wow fadeInDown">
          <h2>KALENDER AKADEMIK</h2>
          <p>SMP GANESA SATRIA DEPOK TAHUN PELAJARAN 2019/2020</p>
        </div>
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
        <br><br><br>
      </div>
    </div>
  </section>
 

@endsection