<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="css/berita.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Berita - Desa Singabangsa</title>
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php' ?>
    <section class="py-5">
        <div class="container mt-5">
            <h4 class="text-center">BERITA TERKINI</h4>

            <div class="row mt-3">
                <div class="col-lg-4">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Cari Berita..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary btn-sm" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="news-card">
                                <div class="card">
                                    <img src="./assets/images/news/news1.jpeg" class="card-img-top" alt="news-image">
                                    <div class="card-body">
                                        <a href="detail_berita.php" class="text-reset">
                                            <h6 class="text-justify text-blue-900">Optimalkan Sosialisasi Penerapan Ganjil Genap Kawasan Puncak</h6>
                                        </a>
                                        <div>
                                            <small class="text-blue-900"><i class="far fa-clock text-blue-900 "></i> 27 September 2021</small>
                                            <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="news-card">
                                <div class="card">
                                    <img src="./assets/images/news/news1.jpeg" class="card-img-top" alt="news-image">
                                    <div class="card-body">
                                        <a href="detail_berita.php" class="text-reset">
                                            <h6 class="text-justify text-blue-900">Optimalkan Sosialisasi Penerapan Ganjil Genap Kawasan Puncak</h6>
                                        </a>
                                        <div>
                                            <small class="text-blue-900"><i class="far fa-clock text-blue-900 "></i> 27 September 2021</small>
                                            <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="news-card">
                                <div class="card">
                                    <img src="./assets/images/news/news1.jpeg" class="card-img-top" alt="news-image">
                                    <div class="card-body">
                                        <a href="detail_berita.php" class="text-reset">
                                            <h6 class="text-justify text-blue-900">Optimalkan Sosialisasi Penerapan Ganjil Genap Kawasan Puncak</h6>
                                        </a>
                                        <div>
                                            <small class="text-blue-900"><i class="far fa-clock text-blue-900 "></i> 27 September 2021</small>
                                            <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="news-card">
                                <div class="card">
                                    <img src="./assets/images/news/news1.jpeg" class="card-img-top" alt="news-image">
                                    <div class="card-body">
                                        <a href="detail_berita.php" class="text-reset">
                                            <h6 class="text-justify text-blue-900">Optimalkan Sosialisasi Penerapan Ganjil Genap Kawasan Puncak</h6>
                                        </a>
                                        <div>
                                            <small class="text-blue-900"><i class="far fa-clock text-blue-900 "></i> 27 September 2021</small>
                                            <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="news-card">
                                <div class="card">
                                    <img src="./assets/images/news/news1.jpeg" class="card-img-top" alt="news-image">
                                    <div class="card-body">
                                        <a href="detail_berita.php" class="text-reset">
                                            <h6 class="text-justify text-blue-900">Optimalkan Sosialisasi Penerapan Ganjil Genap Kawasan Puncak</h6>
                                        </a>
                                        <div>
                                            <small class="text-blue-900"><i class="far fa-clock text-blue-900 "></i> 27 September 2021</small>
                                            <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="news-card">
                                <div class="card">
                                    <img src="./assets/images/news/news1.jpeg" class="card-img-top" alt="news-image">
                                    <div class="card-body">
                                        <a href="detail_berita.php" class="text-reset">
                                            <h6 class="text-justify text-blue-900">Optimalkan Sosialisasi Penerapan Ganjil Genap Kawasan Puncak</h6>
                                        </a>
                                        <div>
                                            <small class="text-blue-900"><i class="far fa-clock text-blue-900 "></i> 27 September 2021</small>
                                            <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="mb-3">Agenda</h4>
                    <div class="agenda">
                        <div class="row mb-2">
                            <div class="col">
                                <div class="d-flex">
                                    <div>
                                        <i class="far fa-2x text-blue-900 fa-calendar-check mr-3"></i>
                                    </div>
                                    <div>
                                        <div>
                                            <a href="#" class="text-reset">
                                                <strong class="text-sm text-blue-900">SK PERPANJANGAN PPKM LEVEL 3 TERBARU</strong>
                                            </a>
                                        </div>
                                        <small>
                                            <i class="far fa-calendar-alt"></i>
                                            Selasa, 31 Agustus 2021
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="d-flex">
                                    <div>
                                        <i class="far fa-2x text-blue-900 fa-calendar-check mr-3"></i>
                                    </div>
                                    <div>
                                        <div>
                                            <a href="#" class="text-reset">
                                                <strong class="text-sm text-blue-900">Agenda Kegiatan Pemerintah Kabupaten Bogor</strong>
                                            </a>
                                        </div>
                                        <small>
                                            <i class="far fa-calendar-alt"></i>
                                            Selasa, 12 Agustus 2021
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="d-flex">
                                    <div>
                                        <i class="far fa-2x text-blue-900 fa-calendar-check mr-3"></i>
                                    </div>
                                    <div>
                                        <div>
                                            <a href="#" class="text-reset">
                                                <strong class="text-sm text-blue-900">PERPANJANGAN PPKM DARURAT LEVEL 4</strong>
                                            </a>
                                        </div>
                                        <small>
                                            <i class="far fa-calendar-alt"></i>
                                            Selasa, 09 Agustus 2021
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-blue-900 font-weight-bold">Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
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