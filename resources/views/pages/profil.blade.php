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
              <li role="presentation"><a href="profil" class="active">Profil</a></li>
              <li role="presentation"><a href="informasi">Informasi Sekolah</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- SEJARAH -->
  <div class="sejarah">
    <div class="container">
      <div class="text-center wow fadeInDown">
        <h2>SEJARAH </h2>
        <div class="col-md-10 col-md-offset-1 text-center">
          <p>Mewujudkan cita cita adalah merupakan dambaan setiap orang, apalagi cita cita tersebut sudah dirintis dan dipupuk dengan niat dan tekad yang kuat serta dibekali persiapan jauh hari sebelumnya. Drs. H. Timbul Suryanto yang bercita cita mendirikan sebuah Yayasan Pendidikan sudah memulai dan merencanakannya pada tahun 1972 saat masih aktif sebagai tenaga pengajar dan Kepala Sekolah di sekolah negeri dan swasta.</p>
          <p>Mencari lokasi pendirian yayasan yang dicita citakan didapat dari anjuran salah seorang pegawai sekolahnya yang tinggal di Depok. Dengan alasan bahwa harga tanah akan lebih cepat naik dibanding dengan bunga uang yang disimpan di Bank. Serta merta pada waktu itu jumlah uang seluruhnya di Bank sebesar Rp. 2.000.000,- ditarik dan dibelikan tanah semuanya dengan harga per meter pada waktu itu Rp. 75,- setelah ada penawaran dari harga sebelumnya Rp. 120,-, sehingga mendapat lahan seluas 3 hektar lebih. Lahan ini kemudian menjadi lokasi Yayasan Perguruan Ganesa Satria sekarang.</p>
          <ul class="tag clearfix">
            <li class=" pull-center text-primary"><a href="mendirikan-perguruan-yayasan-ganesa-satria">Selengkapnya</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Visi dan Misi -->
  <section class="action">
    <div class="container">
      <div class="left-text wow fadeInDown">
        <h4>VISI</h4>
        <p><em>Berilmu, Bermutu dan Berahlak Mulia</em></p>
        <br>
        <h4>MISI</h4>
        <p><em>Meningkatkan ilmu pengetahuan dan bertakwa kepada Tuhan Yang Maha Esa</em></p>
        <p><em>Meningkatkan Disiplin</em></p>
        <p><em>Meningkatkan minat baca</em></p>
        <p><em>Meningkatkan kemampuan minimal untuk melanjutkan pendidikan yang lebih tinggi</em></p>
        <p><em>Memberikan kemampuan dan keterampilan sebagai bekal hidup di masyarakat</em></p>
      </div>
      <div class="right-image "></div>
    </div>
  </section> 

  <!-- Fasilitas -->
  <section id="fasilitas">
    <div class="container fasilitas ">
      <div class="struktur">
        <div class="text-center wow fadeInDown">
          <h2>STRUKTUR ORGANISASI</h2>
          <p>SMP GANESA SATRIA DEPOK TAHUN PELAJARAN 2019/2020</p>
        </div>
        <div class="calender">
          <div class="text-center wow fadeInDown">
            <img class="img-struk" src="{{ asset('public/img/info/struktur.jpg')}}">
          </div><br><br>
        </div>
      </div>
      <br>
    </div>
  </section>

@endsection