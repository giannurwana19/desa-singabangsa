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
    <link rel="stylesheet" href="css/kontak.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Kontak - Desa Singabangsa</title>
</head>

<body>
    <!-- navbar -->
    <?php require '../navbar.php' ?>
 
    <section id="kontak" class="py-5">
        <div class="container pt-5">
            <h4 class="pb-4 text-center">HUBUNGI KAMI</h4>
            <div class="row">
                <div class="col-lg-7 mb-4">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6097846337207!2d106.4657244140688!3d-6.314880963552579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42089ec4a1b815%3A0x1337a097e04e30d2!2sKantor+Desa+Singabangsa!5e0!3m2!1sid!2sid!4v1516082446667" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-5 mb-4" data-aos="fade-up-left" data-aos-delay="200">
                    <h4>Informasi dan Pelayanan</h4><hr>
                    <p><strong>Kantor Kepala Desa</strong> - Singabangsa Rt. 004 Te. 002, Singabangsa, Tenjo, Bogor, Jawa Barat 16370</p>
                    <p><strong>Telpon</strong> - (123) 456-7890</p>
                    <p><strong>E-Mail</strong> - <a href="mailto:name@example.com">info@singabangsa.desa.id</a></p>
                    <p><strong>Waktu Pelayanan</strong> - Senin - Jumat Pukul 09:00 sampai 17:00 WIB.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-7">
                    <h5 class="pt-4">Kirim kritik, saran, dan keluhan Anda di bawah ini :</h5><hr>
                    <form role="form" method="POST" action="pages/prs_saran.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="hidden" class="form-control" value="<?php echo $newID; ?>" name="id_saran" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
			        <div class="control-group form-group">
                        <div class="controls">
                            <strong>*Nama Lengkap :</strong>
                            <input type="text" class="form-control" name="nama_masy" onkeypress="return isAlphabetKey(event)" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
			        <div class="control-group form-group">
                        <div class="controls">
                            <strong>*E-mail :</strong>
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <strong>*Nomor Telepon :</strong>
                            <input type="text" class="form-control" name="notelp" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <strong>*Isi :</strong>
                            <textarea rows="7" cols="100" class="form-control" name="isi_saran" required></textarea>
                        </div>
                    </div>
			        <input type="hidden" name="tanggal" class="form-control" value=" <?php echo date('d-m-Y'); ?> " >
                    <div id="success"></div>
                        <button name="kirim_saran" type="submit"  class="btn btn-primary">Kirim</button>
                    </form>
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