<?php

include "../koneksi/koneksi.php";

//Proses Insert
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $foto = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    $fotobaru = 'galeri_' . time() . $foto;

    // Set path folder tempat menyimpan fotonya
    $path = "../desa.com/images/" . $fotobaru;

    // Proses upload
    if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
        // Proses simpan ke Database
        $query = "INSERT INTO galeri(judul, image) VALUES('$judul', '$fotobaru')";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            echo "<script>alert('Galeri berhasil ditambahkan !');
					document.location.href='home.php?page=galeri'</script>\n";
        } else {
            echo "<script>alert('Galeri gagal ditambahkan, silahkan cek kembali inputan anda');
					document.location.href='home.php?page=galeri'</script>\n";
        }
    }
}

?>

<h3 class="page-header text-center">Tambah Galeri</h3>

<div class="row">
    <div class="row">
        <div class="col-md-6">
            <img src="" class="galeri-image-preview img-responsive" alt="">
        </div>
    </div><br>
    <div class="col-md-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">File input</label>
                <input type="file" class="galeri-image" name="image" id="image" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul Kegiatan</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Ex: Gotong Royong" requireds>
            </div>

            <button class="btn btn-primary" name="submit">Kirim</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const galeriInput = document.querySelector('.galeri-image');
        const previewImage = document.querySelector('.galeri-image-preview');

        galeriInput.addEventListener('change', (e) => {
            previewImage.src = URL.createObjectURL(e.target.files[0]);
        });
    });
</script>