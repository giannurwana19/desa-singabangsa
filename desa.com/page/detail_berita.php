<?php

require '../koneksi/koneksi.php';

$resultAgenda = mysqli_query($conn, "SELECT * FROM agenda ORDER BY tanggal DESC, id_agenda DESC LIMIT 3");
$allAgenda = mysqli_fetch_all($resultAgenda, MYSQLI_ASSOC);

$id = $_GET['id'];

if ($id) {
    $result = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info='$id'");

    if (mysqli_num_rows($result) > 0) {
        $berita = mysqli_fetch_assoc($result);
    } else {
        header('Location: index.php?page=berita');
    }
} else {
    header('Location: index.php?page=berita');
}

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
            <h4 class="pb-4 text-center">BERITA TERKINI</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-8">
                        <div class="col">
                            <h5 class="text-justify"><?= $berita['judul'] ?></h5>
                            <div class="mb-2 text-blue-900 font-weight-bold">
                                <small class="text-blue-900"><i class="fas fa-user text-blue-900 "></i> administrator</small> |
                                <small><i class="far fa-clock"></i> <?= date_format(date_create($berita['tgl_post']), "d F Y"); ?></small>
                            </div>

                            <div class="mt-3 mb-3">
                                <?php if ($berita['foto']) : ?>
                                    <img src="../images/<?= $berita['foto'] ?>" class=" img-fluid detail-agenda-img" alt=""><br>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?= $berita['isi']; ?>
                            </div>
                        </div>
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