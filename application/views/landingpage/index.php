<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaga Hoster | Niaga Web</title>
    <!-- Install Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,700;0,800;1,200;1,400;1,800&display=swap"
        rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?> ">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?> ">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>


    <!-- Share -->
    <section class="information border-bottom">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center mb-2">
                    <div class="alert alert-default alert-dismissible alert fade show" role="alert">
                        <a href="#"><i class="fas fa-tag"></i> Gratis Ebook 9 Cara Cerdas Menggunakan Domain</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center">
                    <ul class="list mt-1">
                        <li>
                            <a href="#"><i class="fas fa-phone-alt"></i> 0274-5305505</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-comments"></i> Live Chat</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-circle"></i> Member Area</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Share -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/images/logo.png') ?>" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Afiliasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1>PHP Hosting</h1>
                    <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                    <ul>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?>" height=" 18" alt="#"> Solusi PHP
                            untuk
                            performa query
                            yang lebih cepat,</li>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?>" height="18" alt="#"> Konsumsi memori
                            yang lebih
                            rendah,</li>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?>" height="18" alt="#"> Support PHP 5.3,
                            PHP 5.4, PHP
                            5.5, PHP 5.6, PHP 7</li>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?>" height="18" alt="#"> Fitur enkripsi
                            IonCube dan Zend
                            Guard Loader</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center">
                    <img src="<?= base_url('assets/svg/bannerphp.svg') ?>" class="img-fluid img-hero" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Banner -->

    <!-- Features -->
    <section class="features text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <img src="<?= base_url('assets/svg/zendguard.svg') ?>" alt="">
                    <p>PHP Zend Guard Loader</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <img src="<?= base_url('assets/svg/composerfit.svg') ?>" alt="">
                    <p>PHP Composer</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <img src="<?= base_url('assets/svg/iconcubefit.svg') ?>" alt="">
                    <p>PHP ionCube Loader</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->

    <!-- Package -->
    <section class="package">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3>Paket Hosting Singapura yang Tepat</h3>
                    <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-5 col-md-7 col-sm-8 col-8 mb-4">
                    <div class="package-card package-card-normal">
                        <div class="package-header">
                            <h4 class="border-bottom"><b>Bayi</b></h4>
                            <p><span>Rp <?= $harga_paket[0]["harga_lama"]; ?></span></p>
                            <p class="package-price">Rp<b><?= $harga_paket[0]["harga_baru"]; ?></b>/bln</p>
                        </div>
                        <div>
                            <h6 class="package-user border-top border-bottom">938 Pengguna Terdaftar</h6>
                        </div>
                        <div class="package-body">
                            <ul>
                                <li><b>0.5X RESOUCE POWER</b></li>
                                <li><b>500MB</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> Database</li>
                                <li><b>1</b> Domains</li>
                                <li><b>Instant</b> Backup</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                            </ul>
                            <a href="# " class="btn btn-primary btn-package">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-7 col-sm-8 col-8 mb-4">
                    <div class="package-card package-card-normal">
                        <div class="package-header">
                            <h4 class="border-bottom"><b>Pelajar</b></h4>
                            <p><span>Rp <?= $harga_paket[1]["harga_lama"]; ?></span></p>
                            <p class="package-price">Rp<b><?= $harga_paket[1]["harga_baru"]; ?></b>/bln</p>
                        </div>
                        <div class="#">
                            <h6 class="border-top border-bottom">4.168 Pengguna Terdaftar</h6>
                        </div>
                        <div class="package-body">
                            <ul>
                                <li><b>1X RESOUCE POWER</b></li>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> POP3 Email</li>
                                <li><b>Unlimited</b> Database</li>
                                <li><b>10</b> Addon Domains</li>
                                <li><b>Instant</b> Backup</li>
                                <li><b>Domain Gratis</b> Selamanya</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                            </ul>
                            <a href="# " class="btn btn-primary btn-package">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-7 col-sm-8 col-8 mb-4">
                    <div class="bestseller">
                        <img src="./assets/svg/bestseller.svg" alt="">
                    </div>
                    <div class="package-card package-card-active">
                        <div class="package-header active">
                            <h4 class="#"><b>Personal</b></h4>
                            <p><span>Rp <?= $harga_paket[2]["harga_lama"]; ?></span></p>
                            <p class="package-price ">Rp<b><?= $harga_paket[2]["harga_baru"]; ?></b>/bln</p>
                        </div>
                        <div>
                            <h6 class="package-user-active">10.017 Pengguna Terdaftar</h6>
                        </div>
                        <div class="package-body">
                            <ul>
                                <li><b>2X RESOUCE POWER</b></li>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> POP3 Email</li>
                                <li><b>Unlimited</b> Database</li>
                                <li><b>Unlimited</b> Addon Domains</li>
                                <li><b>Instan</b> Backup</li>
                                <li><b>Domain Gratis</b> Selamanya</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                                <li><b>Private</b> Name Server</li>
                                <li><b>SpamAssasin</b> Pro Mail Protection</li>
                            </ul>
                            <a href="# " class="btn btn-primary btn-active">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-7 col-sm-8 col-8 mb-4">
                    <div class="package-card package-card-normal">
                        <div class="package-header">
                            <h4 class="border-bottom"><b>Bisnis</b></h4>
                            <p><span>Rp <?= $harga_paket[3]["harga_lama"]; ?></span></p>
                            <p class="package-price">Rp<b><?= $harga_paket[3]["harga_baru"]; ?></b>/bln</p>
                        </div>
                        <div class="#">
                            <h6 class="border-bottom border-top">3.552 Pengguna Terdaftar</h6>
                        </div>
                        <div class="package-body">
                            <ul>
                                <li><b>3X RESOUCE POWER</b></li>
                                <li><b>500MB</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> POP3 Email</li>
                                <li><b>Unlimited</b> Database</li>
                                <li><b>Unlimited</b> Addon Domains</li>
                                <li><b>Magic Auto</b> Backup & Restore</li>
                                <li><b>Domain Gratis</b> Selamanya</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                                <li><b>Private</b> Name Server</li>
                                <li class="start ">
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                </li>
                                <li><b>Prioritas</b> Layanan Support</li>
                                <li><b>SpamExpert</b> Pro Mail Protection</li>
                            </ul>
                            <a href="# " class="btn btn-primary btn-package">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Package -->

    <!-- Powerfull -->
    <section class="powerfull ">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h4>Powerful dengan Limit PHP yang Lebih Besar</h4>
                </div>
            </div>
            <div class="powerfull-list">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><img src="<?= base_url('assets/svg/checklist.svg') ?>" alt=""></td>
                                    <td>max execution time 300s</td>
                                </tr>
                                <tr style="background-color: #F7F7F7;">
                                    <td><img src="<?= base_url('assets/svg/checklist.svg') ?>" alt=""></td>
                                    <td>max execution time 300s</td>
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url('assets/svg/checklist.svg') ?>" alt=""></td>
                                    <td>php memory limit 1024 MB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><img src="<?= base_url('assets/svg/checklist.svg') ?>" alt=""></td>
                                    <td>post max size 128 MB</td>
                                </tr>
                                <tr style="background-color: #F7F7F7;">
                                    <td><img src="<?= base_url('assets/svg/checklist.svg') ?>" alt=""></td>
                                    <td>upload max filesize 128 MB</td>
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url('assets/svg/checklist.svg') ?>" alt=""></td>
                                    <td>max input vars 2500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Powerful -->

    <!-- Hosting -->
    <section class="hosting">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4>Semua Paket Hosting Sudah Termasuk</h4>
                </div>
            </div>
            <div class="hosting-list">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?= base_url('assets/svg/phpallversi.svg') ?>" class="img-fluid" alt="">
                        <h5>PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?= base_url('assets/svg/mysql.svg') ?>" class="img-fluid" alt="">
                        <h5>PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?= base_url('assets/svg/cpanel.svg') ?>" class="img-fluid" alt="">
                        <h5>PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?= base_url('assets/svg/garansi.svg') ?>" class="img-fluid" alt="">
                        <h5>PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?= base_url('assets/svg/InnoDB.svg') ?>" class="img-fluid" alt="">
                        <h5>PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?= base_url('assets/svg/mysqlremote.svg') ?>" class="img-fluid" alt="">
                        <h5>PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hosting -->

    <!-- Action -->
    <section class="action border-bottom">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h4>Mendukung Penuh Framework Laravel</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kamu
                        mendukung penuh framework favorit Anda</p>
                    <ul>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?> " height="18 " alt="# "> Install
                            Laravel <b>1 klik</b>
                            dengan Softaculous Installer.</li>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?> " height="18 " alt="# "> Mendukung
                            ekstensi <b>PHP
                                MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b></li>
                        <li><img src="<?= base_url('assets/svg/checklist.svg') ?> " height="18 " alt="# "> Tersedia
                            <b>Composer</b> dan
                            <b>SSH</b> untuk menginstal packages pilihan Anda.
                        </li>
                        <p class="note">
                            Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis
                        </p>
                        <a href="#" class="btn btn-primary btn-active"> Pilih Hosting Anda</a>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 text-center mt-3">
                    <img src="<?= base_url('assets/svg/laravel.svg') ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Action -->

    <!-- Modul -->
    <section class="modul">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h4>
                </div>
            </div>
            <div class="modul-list">
                <div class="row justify-content-center text-left">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>IcePHP</li>
                            <li>apc</li>
                            <li>apcu</li>
                            <li>apm</li>
                            <li>ares</li>
                            <li>bcmath</li>
                            <li>big_int</li>
                            <li>bitset</li>
                            <li>bloomy</li>
                            <li>bz2_filter</li>
                            <li>clamav</li>
                            <li>coin_acceptor</li>
                            <li>crack</li>
                            <li>dba</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>http</li>
                            <li>huffman</li>
                            <li>idn</li>
                            <li>apm</li>
                            <li>igbinary</li>
                            <li>imagick</li>
                            <li>imap</li>
                            <li>inclued</li>
                            <li>inotify</li>
                            <li>interbase</li>
                            <li>intl</li>
                            <li>ioncube_loader</li>
                            <li>ioncube_loader_4</li>
                            <li>jsmin</li>
                            <li>json</li>
                            <li>ldap</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>n_pdo_mysql</li>
                            <li>oauth</li>
                            <li>oci8</li>
                            <li>odbc</li>
                            <li>opcache</li>
                            <li>pdf</li>
                            <li>pdo</li>
                            <li>pdo_dblib</li>
                            <li>pdo_firebird</li>
                            <li>pdo_mysql</li>
                            <li>pdo_odbc</li>
                            <li>pdo_sqlite</li>
                            <li>pgsql</li>
                            <li>phalcon</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>stats</li>
                            <li>stem</li>
                            <li>stomp</li>
                            <li>suhosin</li>
                            <li>sybase_ct</li>
                            <li>sysvmsg</li>
                            <li>sysvsem</li>
                            <li>sysvshm</li>
                            <li>tidy</li>
                            <li>timezonedb</li>
                            <li>trader</li>
                            <li>translit</li>
                            <li>uploadprogress</li>
                            <li>uri_template</li>
                            <li>uuid</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <a href="#" class="btn btn-primary btn-package mt-5">Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- End Modul -->

    <!-- Info -->
    <section class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                    <p>SuperMicro <b>Intel Xeion 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE
                            CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan
                        <b>MySQL</b> dan caching. Apache load balancer berbasis
                        LiteSpeed Technologies, <b>CageFS</b> security. <b>Raid-10</b> protection dan auto backup untuk
                        kemanan website PHP Anda.
                    </p>
                    <a href="#" class="btn btn-primary btn-active mb-5">Pilih Hosting Anda</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 text-center">
                    <img src="<?= base_url('assets/images/imgsupport.png') ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Info -->

    <!-- Share -->
    <section class="share">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-left">
                    <p>Bagikan jika Anda menyukai halaman ini.</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-right">
                    <ul>
                        <li>
                            <img src="<?= base_url('assets/svg/socialmedia/facebook.svg') ?>" alt="" height="35px"><a
                                href="#">80k</a>
                        </li>
                        <li>
                            <img src="<?= base_url('assets/svg/socialmedia/twitter.svg') ?>" alt="" height="35px"><a
                                href="#">450</a>
                        </li>
                        <li>
                            <img src="<?= base_url('assets/svg/socialmedia/gplus.svg') ?>" alt="" height="35px">
                            <a href="#">1900</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Share -->

    <!-- Help -->
    <section class="help">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-12 col-md-12 col-md-12 col-sm-12 col-12">
                    <h4>Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b></h4>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <a href="#" class="btn btn-primary btn-package">
                        <i class="fas fa-comments"></i> Live Chat
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Help -->

    <!-- Footer -->
    <section class="footer">
        <div class="container">
            <div class="row justify-content-center text-left">
                <div class="col-xl-3 col-lg-3 col-sm-6 col-6">
                    <ul>
                        <li class="header">HUBUNGI KAMI</li>
                        <li>027405305505</li>
                        <li>Senin - Minggu</li>
                        <li>24 Jam Nonstop</li><br>
                        <li>Jl. Selokan Mataram Monjali</li>
                        <li>Karangjadi MT I/304</li>
                        <li>Sinduadi, Mlati, Sleman</li>
                        <li>Yogyakarta 55284</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-6">
                    <ul>
                        <li class="header">LAYANAN</li>
                        <li>Domain</li>
                        <li>Shared Hosting</li>
                        <li>Cloud VPS Hosting</li>
                        <li>Managed VPS Hosting</li>
                        <li>Web Builder</li>
                        <li>Keamanan SSL / HTTPS</li>
                        <li>Jasa Pembuatan Website</li>
                        <li>Program Affiliasi</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-6">
                    <ul>
                        <li class="header">SERVICE HOSTING</li>
                        <li>Hsoting Murah</li>
                        <li>Hosting Indonesia</li>
                        <li>Hosting Singapura SG</li>
                        <li>Hosting PHP</li>
                        <li>Hosting Wordpress</li>
                        <li>Hosting Laravel</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-6">
                    <ul>
                        <li class="header">TUTORIAL</li>
                        <li>Knowledgebase</li>
                        <li>Blog</li>
                        <li>Cara Pembayaran</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center text-left mt-5">
                <div class="col-xl-3 col-lg-3 col-sm-6 col-6">
                    <ul>
                        <li class="header">TENTANG KAMI</li>
                        <li>Tim Niagahoster</li>
                        <li>Karir</li>
                        <li>Events</li><br>
                        <li>Penawaran & Promo Spesial</li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-6">
                    <ul>
                        <li class="header">KENAPA PILIH NIAGAHOSTER?</li>
                        <li>Support Terbaik</li>
                        <li>Garansi Harga Termurah</li>
                        <li>Domain Gratis Selamanya</li>
                        <li>Datacenter Hosting Terbaik</li>
                        <li>Review Pelangan</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <ul>
                        <li class="header">NEWSLETTER</li>
                        <li>
                            <form action="#">
                                <input type="email" placeholder="Email" class="form-control border-ra">
                                <button class="btn btn-primary mt-2 mb-2">Berlangganan</button>
                            </form>
                        </li>
                        <li>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <ul>
                        <li class="mt-4">
                            <a href="#"><i class="fab fa-facebook fa-3x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-3x"></i></a>
                            <a href="#"><i class="fab fa-google-plus fa-3x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center text-left mt-5">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                    <ul>
                        <li class="header">PEMBAYARAN</li>
                    </ul>
                    <ul class="payment">
                        <li><img src="./assets/payment/bca.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/mandiri.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/bni.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/visa.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/master.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/atm-bersama.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/permatabank.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/atm-prima.svg" class="img-fluid" alt=""></li>
                        <li><img src="./assets/payment/alto 1.svg" class="img-fluid" alt=""></li>
                    </ul>
                    <ul>
                        <li>
                            <p class="mt-2">Aktivasi instan dengan e-Payment, Hosting dan Domain langsung aktif!</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center justify-content-center border-top mt-5 pt-3">
                <div class="col-xl-9 col-sm-12 col-12">
                    <p>Copyright © 2016 Niagahoster | Hosting powered by PHP7,CloudLinux,CloudFlare,BitNinja and DC
                        Biznet Technovillage Jakarta <br>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and
                        cloud computing technology</p>
                </div>
                <div class="col-xl-3 col-sm-12 col-12 text-right">
                    <p>Syarat dan Ketentuan | Kebijakan Privasi</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer -->

    <!-- JQuery -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?> "></script>
    <!-- Popper -->
    <script src="<?= base_url('assets/js/popper.min.js') ?> "></script>
    <!-- FontAwesome -->
    <script src="<?= base_url('assets/js/all.min.js') ?> "></script>
</body>

</html>