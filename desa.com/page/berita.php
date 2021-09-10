<?php

require '../koneksi/koneksi.php';

// agenda
$resultAgenda = mysqli_query($conn, "SELECT * FROM agenda ORDER BY tanggal DESC, id_agenda DESC LIMIT 3");
$allAgenda = mysqli_fetch_all($resultAgenda, MYSQLI_ASSOC);

// pagination berita
$batas = 6;
$halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
$halamanAwal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$queryTotalberita = mysqli_query($conn, "SELECT * FROM informasi");

$resultBerita = mysqli_query($conn, "SELECT * FROM informasi ORDER BY tgl_post DESC, id_info DESC LIMIT $halamanAwal, $batas");
$allBerita = mysqli_fetch_all($resultBerita, MYSQLI_ASSOC);

$previous = $halaman - 1;
$next = $halaman + 1;

$jumlahBerita = mysqli_num_rows($queryTotalberita);
$totalHalaman = ceil($jumlahBerita / $batas);

if ($halaman > $jumlahBerita) {
    header('Location: index.php?page=berita&halaman=1');
}

// var_dump($jumlahBerita);
// die;

?>

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
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php if (mysqli_num_rows($resultBerita) > 0) : ?>
                            <?php foreach ($allBerita as $berita) : ?>
                                <div class="col-lg-6 mb-4">
                                    <div class="news-card">
                                        <div class="card">
                                            <?php if ($berita['foto']) : ?>
                                                <img src="../images/<?= $berita['foto'] ?>" class="card-img-top" alt="news-image">
                                            <?php endif; ?>
                                            <div class="card-body">
                                                <a href="index.php?page=detail-berita&id=<?= $berita['id_info'] ?>" class="text-reset">
                                                    <h6 class="text-justify text-blue-900"><?= $berita['judul'] ?></h6>
                                                </a>
                                                <div>
                                                    <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small> |
                                                    <small class="text-blue-900"><i class="far fa-clock text-blue-900 ">
                                                        </i> <?= date_format(date_create($berita['tgl_post']), "d F Y"); ?>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-lg-12 mb-4">
                                <h6>Belum ada berita</h6>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- pagination -->
                    <?php if ($jumlahBerita > $batas) : ?>
                        <nav>
                            <ul class="pagination pagination-sm">
                                <li class="page-item <?php if ($halaman == 1) : ?> disabled <?php endif ?>">
                                    <a class="page-link" <?php if ($halaman > 1) : ?> href="index.php?page=berita&halaman=<?= $previous ?>" <?php endif; ?>>
                                        Previous
                                    </a>
                                </li>
                                <?php for ($no = 1; $no <= $totalHalaman; $no++) : ?>
                                    <li class="page-item <?php if ($halaman == $no) : ?> active <?php endif; ?>">
                                        <a class="page-link" href="index.php?page=berita&halaman=<?= $no ?>"><?= $no; ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item <?php if ($halaman == $totalHalaman) : ?> disabled <?php endif ?>">
                                    <a class="page-link" <?php if ($halaman < $totalHalaman) : ?> href="index.php?page=berita&halaman=<?= $next ?>" <?php endif; ?>>
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif; ?>

                </div>
                <div class=" col-md-4">
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