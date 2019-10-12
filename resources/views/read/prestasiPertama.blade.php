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
        <a href="smp-ganesa-satria-depok-juara-pertama-lomba-pmr-madya">Prestasi</a>
      </h3>
      <hr>
      <div class="text-center">
        <h2>SMP Ganesa Satria Depok Juara Pertama Lomba PMR Madya</h2>
        <p><img class="img-read" src="{{ asset('public/img/prestasi/prestasi_sekolah1.jpg')}}" alt=""></p>
        <div class="col-md-12 des-read text-left">
          <p>Swara Pendidikan.co.id – (SUKMAJAYA, DEPOK) – Prestasi    membanggakan kembali diraih siswa  Sekolah 
            Menengah Pertama (SMP) Ganesa Satria, Depok 2 Tengah dengan meraih juara pertama Lomba Palang Merah Remaja 
            (PMR) Madya kategori ketangkasan tandu putra pada Minggu (5/3/17) lalu di lapangan SMK Perintis Depok.
          </p>
          <p>Lomba tahunan tingkat SMP yang digelar dalam rangka menyambut Hari Jadi Yayasan Enam-Enam ini 
            diikuti sebanyak 12 sekolah di kota Depok.
          </p>
          <p>Kepala SMP Ganesa Satria, Parmiyah, SPd mengatakan, apa yang telah diraih oleh siswa didiknya tidak lepas 
            dari hasil latihan yang gigih serta disiplin. “Juga doa orang tua, guru dan dukungan teman-teman di sekolah,” 
            tutur Parmiyah di damping guru pembina ekskul PMR Yenti Idris, S.Pd. Senin (6/3/17)
          </p>
          <p>Hal senada juga diungkap Yenti Idris, S.Pd. Dia berharap, prestasi yang telah diraih siswa-siswinya pada 
            event ini kemarin bisa memacu motivasi mereka untuk terus meningkatkan prestasinya. Minimal bisa 
            mempertahankan predikat juara yang disandangnya.
          </p>
          <p>“Alhamdulillah puji syukur kepada Alloh SWT yang telah memberikan kesempatan buat anak-anak kami meraih prestasi 
            yang membanggakan ini. Semoga prestasi ini terus di pertahankan dan di tingkatkan, amin,” ucap guru 
            pembina ekskul PMR SMP Ganesa Satria.
          </p>
          <p>“Rencananya pada 12 Maret nanti,  PMR SMP Ganesa Satria juga akan mengikuti  lomba yang sama di SMK Farmasi, 
            Beji-Depok. Doakan ya, biar sekolah kami bisa kembali raih juara,” ujar Parmiyah. (gus)
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr>


@endsection