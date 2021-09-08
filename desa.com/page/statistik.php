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
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Statistik - Desa Singabangsa</title>
</head>

<body>
    <!-- navbar -->
    <?php require '../navbar.php' ?>

    <section class="py-5">
        <div class="container pt-5">
            <h4 class="text-center">Statistik</h4>
            <!-- Page Content -->
            <div class="container">
                <h5 class="mt-4 mb-3 text-center">Data Statistik Penduduk Berdasarkan Kategori</h5>

                <div class="text-center">
                    <h6 class="text-center mb-3">Pilih kategori kependudukan :</h6>
                    <div class="button-container">
                        <!-- <a href="index.php?page=statistik&kategori=agama" class="btn btn-outline-primary">Agama</a>
                        <a href="index.php?page=statistik&kategori=umur" class="btn btn-outline-primary">Umur</a>
                        <a href="index.php?page=statistik&kategori=jenkel" class="btn btn-outline-primary">Jenis Kelamin</a>
                        <a href="index.php?page=statistik&kategori=pendidikan" class="btn btn-outline-primary">Pendidikan</a></b> -->
                        <a href="statistik.php?page=statistik&kategori=agama" class="btn btn-outline-primary btn-sm mb-2">Agama</a>
                        <a href="statistik.php?page=statistik&kategori=umur" class="btn btn-outline-primary btn-sm mb-2">Umur</a>
                        <a href="statistik.php?page=statistik&kategori=jenkel" class="btn btn-outline-primary btn-sm mb-2">Jenis Kelamin</a>
                        <a href="statistik.php?page=statistik&kategori=pendidikan" class="btn btn-outline-primary btn-sm mb-2">Pendidikan</a></b>
                    </div>
                </div>
                <!-- <?php
                        if (isset($_GET['kategori'])) {
                            switch ($_GET['kategori']) {
                                case 'agama':
                                    include 'page/statistik_pend_agama.php';
                                    break;
                                case 'umur':
                                    include 'page/statistik_pend_umur.php';
                                    break;
                                case 'jenkel':
                                    include 'page/statistik_pend_jenkel.php';
                                    break;
                                case 'pendidikan':
                                    include 'page/statistik_pend_pendidikan.php';
                                    break;
                                default:
                                    include 'page/404.php';
                            }
                        } else {
                            include 'pages/statistik_pend_agama.php';
                        }
                        ?> -->

                <div class="chart-container mt-4">
                    <?php
                    if (isset($_GET['kategori'])) {
                        switch ($_GET['kategori']) {
                            case 'agama':
                                include 'statistik_pend_agama.php';
                                break;
                            case 'umur':
                                include 'statistik_pend_umur.php';
                                break;
                            case 'jenkel':
                                include 'statistik_pend_jenkel.php';
                                break;
                            case 'pendidikan':
                                include 'statistik_pend_pendidikan.php';
                                break;
                            default:
                                echo '<script>window.location.href = "404.php"</script>';
                        }
                    } else {
                        include 'statistik_pend_agama.php';
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>

    <?php require '../footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/index.js"></script>
</body>

</html>