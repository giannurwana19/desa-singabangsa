<?php

require '../koneksi/koneksi.php';

// agenda
$resultAgenda = mysqli_query($conn, "SELECT * FROM agenda ORDER BY tanggal DESC, id_agenda DESC LIMIT 3");
$allAgenda = mysqli_fetch_all($resultAgenda, MYSQLI_ASSOC);

// berita
$resultBerita = mysqli_query($conn, "SELECT * FROM informasi WHERE status='publish' ORDER BY tgl_post DESC, id_info DESC limit 3");
$allBerita = mysqli_fetch_all($resultBerita, MYSQLI_ASSOC);

// galeri
$resultGaleri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY created_at DESC limit 6");
$allGaleri = mysqli_fetch_all($resultGaleri, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/beranda.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Beranda - Desa Singabangsa</title>
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php' ?>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/desa/s4.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/desa/py1.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/desa/UU.png" class="d-block" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="beranda" class="py-5">
        <div class="container">
            <h4 class="pb-3 text-center">TENTANG</h4>
            <div class="row">
                <div class="col-md-3 py-3" data-aos="zoom-in">
                    <div class="text-center">
                        <img src="../images/logo.png" class="img-fluid img-logo" alt="logo">
                    </div>
                </div>
                <div class="col-md-9 py-3 text-justify" data-aos="zoom-in" data-aos-delay="200">
                    <p><strong>Singabangsa</strong> merupakan salah satu Desa di wilayah Kecamatan Tenjo Kabupaten Bogor, dengan luas wilayah 303.262 Ha. Yang terbagi dalam 2 Dusun 4 Rukun Warga ( RW ), 15 Rukun Tetangga ( RT ). Jumlah Penduduk Desa Singabangsa sampai akhir bulan Desember Tahun 2019 tercatat sebanyak 3,998 Jiwa Dengan Jumlah Kartu Keluarga Sebanyak : 2,400 Kepala Keluarga (KK).</p>
                    <p>Dengan kondisi wilayah demikian pemanfaatan lahan sebagai dasar dari tunjuan pembangunan dan pemanfaatan Sumber Daya Alam (SDA) menjadi fokus utama dalam visi dan Misi Kepala Desa Singabangsa. Tidak lain, pemanfaatan tersebut bertujuan untuk kemaslahatan warga setempat yang juga diharapkan dapat mengakat perekonomian masyarakatnya</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="bg-light py-5">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h4>GALERI</h4>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php if (mysqli_num_rows($resultGaleri) > 0) : ?>
                        <?php foreach ($allGaleri as $galeri) : ?>
                            <div class="col-md-6 col-lg-4 mb-3" data-aos="flip-left" data-aos-delay="100">
                                <div class="image-item">
                                    <a href="images/<?= $galeri['image']; ?>" class="fancybox" data-fancybox="gallery1">
                                        <img src="images/<?= $galeri['image']; ?>" class="img-shadow" width="100%" height="100%" alt="">
                                        <div class="overlay"><?= $galeri['judul']; ?></div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <h6>Belum ada foto galeri</h6>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="py-5">
        <div class="container">
            <h4 class="text-center pb-3">BERITA TERKINI</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="news-container">
                        <?php if (mysqli_num_rows($resultAgenda) > 0) : ?>
                            <?php foreach ($allBerita as $berita) : ?>
                                <div class="row news-item border-bottom mb-4">
                                    <div class="col-md-8 order-2 order-sm-2 order-md-1 order-lg-1 mb-3">
                                        <a href="index.php?page=detail-berita&id=<?= $berita['id_info']; ?>" class="text-reset">
                                            <h5 class="text-justify text-blue-900"><?= $berita['judul']; ?></h5>
                                        </a>
                                        <div class="mb-2 text-blue-900 font-weight-bold">
                                            <small><i class="fas fa-user"></i> administrator</small> |
                                            <small><i class="far fa-clock"></i> <?= date_format(date_create($berita['tgl_post']), "d F Y"); ?></small>
                                        </div>
                                        <div>
                                            <p><?= $berita['judul']; ?></p>
                                            <a href="index.php?page=detail-berita&id=<?= $berita['id_info'] ?>" class="text-decoration-none text-blue-900 font-weight-bold">...Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 order-1 order-sm-1 order-md-2 order-lg-2 mb-2">
                                        <img src="../images/<?= $berita['foto'] ?>" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <h6>Belum ada Berita</h6>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 px-4">
                    <h4 class="mb-3">Agenda</h4>
                    <div class="agenda">
                        <?php if (mysqli_num_rows($resultAgenda) > 0) : ?>
                            <?php foreach ($allAgenda as $agenda) : ?>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="d-flex">
                                            <div>
                                                <i class="far fa-2x text-blue-900 fa-calendar-check mr-3"></i>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="index.php?page=detail-agenda&id=<?= $agenda['id_agenda']; ?>" class="text-reset">
                                                        <strong class="text-sm text-blue-900"><?= $agenda['judul'] ?></strong>
                                                    </a>
                                                </div>
                                                <small>
                                                    <i class="far fa-calendar-alt"></i>
                                                    <?= date_format(date_create($agenda['tanggal']), "d F Y"); ?>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <h6>Belum ada agenda</h6>
                        <?php endif; ?>
                    </div>
                    <a href="index.php?page=agenda" class="text-blue-900 font-weight-bold">Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/index.js"></script>
</body>

</html>