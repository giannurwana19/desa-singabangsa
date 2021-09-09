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
    <?php include 'navbar.php' ?>

    <section class="py-5">
        <div class="container mt-5">
            <h4 class="text-center mt-4">PANDUAN ADMINISTRASI PENDUDUK</h4>
            <h5 class="text-center mt-4 font-weight-normal">Pilih kategori panduan dibawah ini:</h5>

            <!-- category -->
            <div class="category text-center mt-4">
                <a href="index.php?page=panduan&kategori=kk"><button type="button" class="btn btn-outline-primary">Kartu Keluarga</button></a>
                <a href="index.php?page=panduan&kategori=ektp"><button type="button" class="btn btn-outline-primary">E-KTP</button></a>
                <a href="index.php?page=panduan&kategori=akte"><button type="button" class="btn btn-outline-primary">Akte</button></a>
                <a href="index.php?page=panduan&kategori=skck"><button type="button" class="btn btn-outline-primary">SKCK</button></a>
                <a href="index.php?page=panduan&kategori=skem"><button type="button" class="btn btn-outline-primary">Surat Kematian</button></a>
            </div>
            <hr>
        </div>

        <?php
        if (isset($_GET['kategori'])) {
            switch ($_GET['kategori']) {
                case 'kk':
                    include 'panduan_kk.php';
                    break;
                case 'ektp':
                    include 'panduan_ektp.php';
                    break;
                case 'akte':
                    include 'panduan_akte.php';
                    break;
                case 'skck':
                    include 'panduan_skck.php';
                    break;
                case 'skem':
                    include 'panduan_skem.php';
                    break;
                default:
                    echo '<script>window.location.href = "404.php"</script>';
            }
        } else {
            include 'panduan_kk.php';
        }
        ?>
    </section>

    <!-- footer page-->
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/index.js"></script>
</body>

</html>