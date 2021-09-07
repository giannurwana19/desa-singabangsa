<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Reequired meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Sistem Informasi Desa Singabangsa, Tenjo Kabupaten Bogor yang membantu Manajemen Pemerintahan Desa">
    <meta name="keywords" content="website tenjo,tenjo,tenjo kabupaten bogor,desa singabangsa, singabangsa, sistem informasi desa singabangsa, desa singabangsa tenjo, desa, web desa, website desa, kabupaten bogor">
    <meta name="author" content="singabangsa">
    <meta name="robots" content="index, follow">
    <meta name="HandheldFriendly" content="true" />

    <!-- favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/icon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/icon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/icon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/icon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/icon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="assets/icon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="assets/icon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="assets/icon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="assets/icon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="assets/icon/mstile-310x310.png" />

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/panduan.css">

    <!-- aos  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Panduan - Desa Singabangsa</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg font-weight-bold navbar-dark bg-blue-900">
        <div class="container">
            <nav class="navbar navbar-dark bg-blue-900">
                <a class="navbar-brand" href="#">
                    <img src="../../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <span class="title-navbar"><span class="d-none d-sm-inline-block">DESA</span> SINGABANGSA</span>
                </a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="#beranda">Beranda</a>
                    <a class="nav-link" href="profil.php">Profil</a>
                    <a class="nav-link" href="agenda.hp">Agenda</a>
                    <a class="nav-link" href="#galeri">Galeri</a>
                    <a class="nav-link" href="panduan.php">Panduan</a>
                    <a class="nav-link" href="#kontak">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h4 class="text-center mt-4 ">PANDUAN ADMINISTRASI PENDUDUK</h4>
        <h5 class="text-center mt-4 font-weight-normal">Pilih kategori panduan dibawah ini:</h5>

    <!-- category -->
       <div class="category d-flex justify-content-center flex-wrap mt-4">
       <a href="index.php?page=panduan&&kt_panduan=kk"><button type="button" class="btn btn-outline-primary">Kartu Keluarga</button></a>
       <a href="index.php?page=panduan&&kt_panduan=ektp"><button type="button" class="btn btn-outline-primary">E-KTP</button></a>
       <a href="index.php?page=panduan&&kt_panduan=akte"><button type="button" class="btn btn-outline-primary">Akte</button></a>
       <a href="index.php?page=panduan&&kt_panduan=skck"><button type="button" class="btn btn-outline-primary">SKCK</button></a>
       <a href="index.php?page=panduan&&kt_panduan=srt_kematian"><button type="button" class="btn btn-outline-primary">Surat Kematian</button></a>
       </div>
    <hr>

    <!-- download file panduan -->
   <section>
       <img src="./assets/images/panduan/kk.png" alt="panduan" class="img-fluid">
       <h6 class="text-center font-weight-bolder">Download file panduan: <a href="">disini</a></h6>
   </section>
    </div>
</body>
</html>