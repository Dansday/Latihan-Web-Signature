<?php
session_start();
if (isset($_SESSION['id'])) {
  header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Explore Terus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/img/favicon.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/jquery/jquery-ui.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/login.css" rel="stylesheet">
  <link href="/css/signature.css" rel="stylesheet">
</head>
    
<body>

  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.html">
          <h1><a href="#hero">EXPLORE TERUS</a></h1>
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Daftar Paket</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
          <li><a href="#sk">Syarat & Ketentuan</a></li>
          <li><a href="#contact">Kontak Kami</a></li>
          <li><a href="" data-toggle="modal" data-target="#login">Masuk/Daftar</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero">
    <div class="hero-container">
      <h1>Selamat Datang di</h1>
      <h1>Explore Terus</h1>
      <h2>Jasa Sewa Fotografer & Videografer Profesional</h2>
      <a href="#about" class="btn-get-started">Ayo Mulai</a>
      
      <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><b>Masuk</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="login-registration-menu">
                <form id="login-form" action="" method="post" role="form">
                  <div class="input-row">
                    <span id="email-info"></span> <input type="email"
                    name="login-email-id" id="login-email-id"
                    class="input-field" placeholder="Alamat Email">
                  </div>
                  <div class="input-row">
                    <span id="password-info"></span> <input type="password"
                    name="login-password" id="login-password"
                    class="input-field" placeholder="Kata Sandi">
                  </div>
                  <input type="button" class="btn btn-primary" value="Masuk" onclick="ajaxLogin()">
                </form>
                <div class="success-message" id="login-success-message" style="display: none"></div>
                <div class="error-message" id="login-error-message" style="display: none"></div>
              </div>
            </div>
            <div class="modal-footer">
              <p>Tidak punya akun? <a href="" data-toggle="modal" data-target="#register" data-dismiss="modal">Daftar sekarang</a>.</p>
            </div>
          </div>
        </div>
      </div>

      <div id="register" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><b>Pendaftaran</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="login-registration-menu">
                <form id="register-form" action="" method="post" role="form">
                  <div class="input-row">
                    <span id="first-name-info"></span> <input type="text"
                    name="first-name" id="first-name" class="input-field"
                    placeholder="Nama Depan" value="">
                  </div>
                  <div class="input-row">
                    <span id="last-name-info"></span> <input type="text"
                    name="last-name" id="last-name" class="input-field"
                    placeholder="Nama Belakang" value="">
                  </div>
                  <div class="input-row">
                    <span id="register-email-info"></span> <input type="email"
                    name="register-email-id" id="register-email-id"
                    class="input-field" placeholder="Alamat Email" value="">
                  </div>
                  <div class="input-row">
                    <span id="contact-no-info"></span> <input type="text"
                    name="contact-number" id="contact-number" maxlength="13"
                    class="input-field" placeholder="Nomor Handphone">
                  </div>
                  <div class="input-row">
                    <span id="register-passwd-info"></span> <input
                    type="password" name="register-password"
                    id="register-password" class="input-field"
                    placeholder="Kata Sandi">
                  </div>
                  <div class="input-row">
                    <span id="confirm-passwd-info"></span> <input
                    type="password" name="confirm-password"
                    id="confirm-password" class="input-field"
                    placeholder="Ulang Kata Sandi">
                  </div>
                  <input type="button" class="btn btn-primary" value="Daftar" onclick="ajaxRegistration()">
                </form>
                <div class="success-message" id="register-success-message" style="display: none"></div>
                <div class="error-message" id="register-error-message" style="display: none"></div>
                <div class="thank-you-registration"></div>
              </div>
              <div class="modal-footer">
                <p>Sudah memiliki akun? <a href="" data-toggle="modal" data-target="#login" data-dismiss="modal">Masuk disini</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <main id="main">

    <section id="about">
      <div class="section-header">
        <h1 class="section-title">Tentang Kami</h1>
      </div>
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Sejarah</h2>
            <p>
              Explore Terus adalah sebuah perusahaan yang bergerak dibidang jasa fotografi dan videografi
              berkualitas dan profesional. Berdiri sejak tahun 2020.
            </p>
            <h2 class="title">Visi & Misi</h2>
            <p>
              Masih Belom ada isinya
            </p>
            <h2 class="title">Filosofi Logo</h2>
            <p>
              Logo kami memiliki arti tersendiri di setiap elemennya yang bertujuan bahwa kami
              bertanggungjawab dalam memberikan keamananan, kenyamanan,keberanian dalam berkonsep,
              dapat dipercaya, dan bekerja secara profesional sesuai dengan arahan yang client inginkan.
            </p>
            <a href="files/Filosofi Logo Explore Terus.pdf" class="btn-1">Unduh Filosofi Logo.PDF</a>
          </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

        <h2 class="title">Tim Kami</h2>
        <p>Explore Terus adalah sebuah perusahaan yang bergerak dibidang jasa fotografi dan
          videografi berkualitas dan profesional. Berdiri sejak tahun 2020.
        </p>
        <div class="row">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <div class="pic"><img src="img/tim/1.jpg" alt=""></div>
              <h4>Danto</h4>
              <span>Pendiri sekaligus pemimpin di perusahaan kami dengan segudang prestasi dan lulusan terbaik
                Politeknik Negeri Jakarta</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="member">
              <div class="pic"><img src="img/tim/2.jpg" alt=""></div>
              <h4>Ibra</h4>
              <span>Pilot drone terhandal di perusahaan kami dengan segudang prestasi dalam kejuaraan nasional maupun
                internasional</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="member">
              <div class="pic"><img src="img/tim/3.jpg" alt=""></div>
              <h4>Ano</h4>
              <span>Pemimpin tim kreatif di perusahaan kami dengan segudang prestasi dan lulusan terbaik Institut
                Kesenian Jakarta</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
            <div class="member">
              <div class="pic"><img src="img/tim/4.jpg" alt=""></div>
              <h4>Edo</h4>
              <span>Fotografer sekaligus Videografer terbaik di perusahaan kami dengan segudang prestasi dalam kejuaraan
                nasional maupun internasional</span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Daftar Paket</h3>
          <p class="section-description">Pilihan paket Fotografi & Videografi yang tersedia</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><i class="fa fa-home"></i></div>
              <h4 class="title">Paket Engagement</h4>
              <p class="description">Tersedia beberapa paket Fotografi & Videografi untuk acara lamaran dengan harga
                spesial</p>
              <button type="button" class="btn-1" data-toggle="modal" data-target="#myModal1">Saya Mau Ini</button>
              <div id="myModal1" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><b>PAKET ENGAGEMENT</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <h2>PE1</h2>
                            <ul>
                              <li>1 Fotographer</li>
                              <li>3 Jam sesi</li>
                              <li>1 Album kolase 15 (20×30) Sheet + Cetak + Custom name couple (Include Edit Photo)</li>
                              <li>Photo dikirim ke google drive</li>
                              <li>Cinematic video durasi 1 menit (Teaser)</li>
                            </ul>
                          </div>
                          <div class="col-sm">
                            <h2>PE2</h2>
                            <ul>
                              <li>1 Fotographer</li>
                              <li>1 Videographer</li>
                              <li>3 Jam sesi</li>
                              <li>1 Album kolase 15 (20×30) Sheet + Cetak + Custom name couple (Include Edit Photo)</li>
                              <li>Photo dikirim ke google drive</li>
                              <li>1 Video cinematic durasi 1 menit (teaser) + 3 menit Video cinematic</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn-1" data-dismiss="modal" data-toggle="modal" data-target="#login">Pesan</button>
                      <button type="button" class="btn-1-close" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title">Paket Pra-Wedding</h4>
              <p class="description">Tersedia beberapa paket Fotografi & Videografi untuk acara pra-wedding dengan harga
                spesial</p>
              <button type="button" class="btn-1" data-toggle="modal" data-target="#myModal2">Saya Mau Ini</button>
              <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><b>PAKET PRA-WEDDING</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <h2>PPW1</h2>
                            <ul>
                              <li>1 Fotographer</li>
                              <li>3 Jam sesi</li>
                              <li>1 Album kolase 15 (20×30) Sheet + Cetak + Custom name couple (Include Edit Photo)</li>
                              <li>Photo dikirim ke google drive</li>
                              <li>Cinematic video durasi 1 menit (Teaser)</li>
                            </ul>
                          </div>
                          <div class="col-sm">
                            <h2>PPW2</h2>
                            <ul>
                              <li>1 Fotographer</li>
                              <li>1 Videographer</li>
                              <li>3 Jam sesi</li>
                              <li>1 Album kolase 15 (20×30) Sheet + Cetak + Custom name couple (Include Edit Photo)</li>
                              <li>Photo dikirim ke google drive</li>
                              <li>1 Video cinematic durasi 1 menit (Teaser) + 3 menit Video cinematic + (Konsep
                                Shooting)</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn-1" data-dismiss="modal" data-toggle="modal" data-target="#login">Pesan</button>
                      <button type="button" class="btn-1-close" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><i class="fa fa-heart"></i></div>
              <h4 class="title">Paket Wedding</h4>
              <p class="description">Tersedia beberapa paket Fotografi & Videografi untuk acara pernikahan dengan harga
                spesial</p>
              <button type="button" class="btn-1" data-toggle="modal" data-target="#myModal3">Saya Mau Ini</button>
              <div id="myModal3" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><b>PAKET WEDDING</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <h2>PW1</h2>
                            <ul>
                              <li>Akad</li>
                              <li>1 Fotographer</li>
                              <li>1 Videographer</li>
                              <li>2 Jam sesi</li>
                              <li>1 Album kolase 15 (20×30) Sheet + Cetak + Custom name couple (Include Edit Photo)</li>
                              <li>Photo dikirim ke google drive</li>
                              <li>1 Video cinematic durasi 1 menit + 3-5 Menit video cinematic</li>
                            </ul>
                          </div>
                          <div class="col-sm">
                            <h2>PW2</h2>
                            <ul>
                              <li>Akad + Resepsi</li>
                              <li>1 Fotographer</li>
                              <li>1 Videographer</li>
                              <li>1 Asistant</li>
                              <li>8 Jam sesi</li>
                              <li>1 Album kolase 15 (20×30) Sheet + Cetak + Custom name couple (Include Edit Photo)</li>
                              <li>Photo dikirim ke google drive</li>
                              <li>2-3 Menit durasi cinematic video Akad + Resepsi</li>
                              <li>5-8 Menit Full video documentation (No Edit)</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn-1" data-dismiss="modal" data-toggle="modal" data-target="#login">Pesan</button>
                      <button type="button" class="btn-1-close" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Galeri</h3>
          <p class="section-description">Galeri hasil karya kami untuk client</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-foto, .filter-video, .filter-illustrasi" class="filter-active">Semua</li>
              <li data-filter=".filter-foto">Foto</li>
              <li data-filter=".filter-video">Video</li>
              <li data-filter=".filter-illustrasi">Illustrasi</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-foto">
            <img src="img/galeri/foto/1.jpg" alt="">
            <div class="details">
              <h4>Foto 1</h4>
              <span>Pra-Wedding</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-foto">
            <img src="img/galeri/foto/2.jpg" alt="">
            <div class="details">
              <h4>Foto 2</h4>
              <span>Wedding</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-foto">
            <img src="img/galeri/foto/3.jpg" alt="">
            <div class="details">
              <h4>Foto 3</h4>
              <span>Pra-Wedding</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-video">
            <iframe src="https://www.youtube.com/embed/Zjb3xoFZbIE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
              picture-in-picture" allowfullscreen></iframe>
            <div class="details">
              <h4>Video 1</h4>
              <span>Engagement</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-video">
            <iframe src="https://www.youtube.com/embed/Ul25zS1uWv8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
              picture-in-picture" allowfullscreen></iframe>
            <div class="details">
              <h4>Video 2</h4>
              <span>Wedding</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-video">
            <iframe src="https://www.youtube.com/embed/q3bCIpUDb1A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
              picture-in-picture" allowfullscreen></iframe>
            <div class="details">
              <h4>Video 3</h4>
              <span>Engagement</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-illustrasi">
            <img src="img/galeri/illustrasi/1.png" alt="">
            <div class="details">
              <h4>Illustrasi 1</h4>
              <span>Pra-Wedding</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-illustrasi">
            <img src="img/galeri/illustrasi/2.jpg" alt="">
            <div class="details">
              <h4>Illustrasi 2</h4>
              <span>Wedding</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-illustrasi">
            <img src="img/galeri/illustrasi/3.jpg" alt="">
            <div class="details">
              <h4>Illustrasi 3</h4>
              <span>Engagement</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimoni">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Testimoni</h3>
          <p class="section-description">Testimoni singkat dari client terhadap kinerja kami</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <div class="pic"><img src="img/testimoni/1.jpg" alt=""></div>
              <h4>Ahmad Gultom</h4>
              <span>Pelayanannya cepat harga juga bersahabat. Fotografer dan videografer juga profesional. Kualitas
                sangat bagus</span>
              <div class="social">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="member">
              <div class="pic"><img src="img/testimoni/2.jpg" alt=""></div>
              <h4>Tri Arini</h4>
              <span>Hasil fotonya bagus-bagus. Aku upload IG banyak yang suka. Gak nyesel pesan jasa fotografi disini,
                makasih ya</span>
              <div class="social">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="member">
              <div class="pic"><img src="img/testimoni/3.jpg" alt=""></div>
              <h4>Kasim Nainggolan</h4>
              <span>Apa-apaan nih foto-fotonya bagus banget. Cinematic videonya juga keren. Jadi nyesel nikah cuman
                1x</span>
              <div class="social">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
            <div class="member">
              <div class="pic"><img src="img/testimoni/4.jpg" alt=""></div>
              <h4>Cindy Santika</h4>
              <span>Rekomended banget nih buat yang lagi cari fotografer acara nikahan, pelayanannya bagus dan
                cepat</span>
              <div class="social">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sk">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h1 class="section-title">SYARAT & KETENTUAN</h1>
          <p class="section-description">Syarat dan Ketentuan yang berlaku tahun 2020</p>
        </div>
        <div class="container">
          <div class="row sk-container">
            <ul>
              <li>Dp Minimal 40% dari harga paket, Booked H-7 sebelum acara (Non Refundable)</li>
              <li>Pelunasan di bayarkan H-1 Sebelum acara</li>
              <li>Harga paket Pra-Wedding belum termasuk harga tempat</li>
              <li>Untuk lokasi di luar jabodetabek fee charge transport 2-3jt tergantung daerah</li>
              <li>All Photo on Drive = 1-3 Hari</li>
              <li>Kolase album + tas = 10-15 Hari (Setelah di pilih foto oleh Client)</li>
              <li>Edit Photo on drive 3-5 Hari (Setelah di pilih foto oleh Client)</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Kontak Kami</h3>
          <p class="section-description">Untuk info lebih lanjut, silahkan hubungi atau kunjungi kami</p>
        </div>
      </div>

      <iframe src="/config/map.html" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <a onclick="window.open('https://goo.gl/maps/9oSAX97UdRa8zyJ9A')"><i class="fa fa-map-marker"></i></a>
                <p>Jl.Cipedak 1 No.66, Jagakarsa, Jakarta Selatan 12640</p>
              </div>

              <div>
                <a href="mailto: exploreterus.business@gmail.com"><i class="fa fa-envelope"></i></a>
                <p>exploreterus.business@gmail.com</p>
              </div>

              <div>
                <a
                  onclick="window.open('https://api.whatsapp.com/send?phone=6282112320069&text=Halo%20saya%20ingin%20memesan%20paket%20kalian')"><i
                    class="fa fa-whatsapp"></i></a>
                <p>+62 821 1232 0069</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://www.youtube.com/c/ExploreTerus?sub_confirmation=1" class="youtube"><i
                  class="fa fa-youtube"></i></a>
              <a href="https://www.facebook.com/exploreterus" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/exploreterus_/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Pesan anda terkirim. Terimakasih!</div>
              <form role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda"
                    data-rule="minlen:3" data-msg="Masukkan minimal 3 huruf" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda"
                    data-rule="email" data-msg="Masukkan alamat email yang benar" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul"
                    data-rule="minlen:3" data-msg="Masukkan minimal 3 huruf" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="minlen:10"
                    data-msg="Masukkan minimal 10 huruf" placeholder="Pesan"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Explore Terus</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="index.php">Kelompok 3</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-ui.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/config/mail.js"></script>
  <script src="/config/main.js"></script>
  <script src="/config/login-registration.js"></script>
  <script src="/lib/jquery/jquery.js" type='text/javascript'></script>
  <script src="/lib/signature_pad-master/js/signature_pad.js"></script>
  <script src="/lib/jSignature-master/libs/jSignature.min.js"></script>
  <script src="/lib/jSignature-master/libs/modernizr.js"></script>
  <script src="/config/signature.js"></script>

</body>

</html>