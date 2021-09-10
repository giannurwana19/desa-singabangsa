<?php

include '../koneksi/koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
$halamanAwal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$queryTotalGaleri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY created_at DESC");

$resultGaleri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY created_at DESC LIMIT $halamanAwal, $batas");
$allGaleri = mysqli_fetch_all($resultGaleri, MYSQLI_ASSOC);

$previous = $halaman - 1;
$next = $halaman + 1;

$jumlahGaleri = mysqli_num_rows($queryTotalGaleri);
$totalHalaman = ceil($jumlahGaleri / $batas);

if ($halaman > $jumlahGaleri) {
    header('Location: home.php?page=galeri&halaman=1');
}

// hapus galeri
if (isset($_POST['hapus_galeri'])) {
    $id = $_POST['id'];
    //DELETE QUERY START
    $query = "SELECT * FROM galeri WHERE id=$id";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Cek apakah file foto sebelumnya ada di folder foto
    if (file_exists("../desa.com/images/" . $data['image'])) { // Jika foto ada
        unlink("../desa.com/images/" . $data['image']); // Hapus file foto sebelumnya yang ada di folder foto
    }

    $query = "DELETE FROM galeri WHERE id=$id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "<script>alert('Galeri berhasil dihapus !');
					document.location.href='home.php?page=galeri'</script>\n";
    } else {
        echo "<script>alert('Galeri gagal dihapus');
					document.location.href='home.php?page=galeri'</script>\n";
    }
    exit;
}

?>

<div>
    <div class="text-center">
        <h3 class="page-header">Daftar Galeri</h3>
        <a href="home.php?page=tambah-galeri" class="btn btn-primary">+ Tambah Galeri</a>
    </div>

    <br>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($resultGaleri) > 0) : ?>
                <?php $no = $halamanAwal + 1; ?>
                <?php foreach ($allGaleri as $galeri) : ?>
                    <tr>
                        <td style="width: 30px;"><?= $no; ?>.</td>
                        <td><?= $galeri['judul']; ?></td>
                        <td>
                            <img src="../desa.com/images/<?= $galeri['image'] ?>" width="150" alt="<?= $galeri['judul']; ?>">
                        </td>
                        <th>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $galeri['id'] ?>">
                                <button type="submit" name="hapus_galeri" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                                    hapus
                                </button>
                            </form>
                        </th>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <th colspan="4" class="text-center">Data galeri kosong!</th>
            <?php endif; ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="<?php if ($halaman == 1) : ?> disabled <?php endif ?>">
                <a <?php if ($halaman > 1) : ?> href="home.php?page=galeri&halaman=<?= $previous ?>" <?php endif; ?> aria-label="Previous">
                    Previous
                </a>
            </li>
            <?php for ($no = 1; $no <= $totalHalaman; $no++) : ?>
                <li class="<?php if ($halaman == $no) : ?> active <?php endif; ?>">
                    <a href="home.php?page=galeri&halaman=<?= $no ?>"><?= $no; ?></a>
                </li>
            <?php endfor; ?>
            <li class=" <?php if ($halaman == $totalHalaman) : ?> disabled <?php endif ?>">
                <a <?php if ($halaman < $totalHalaman) : ?> href="home.php?page=galeri&halaman=<?= $next ?>" <?php endif; ?> aria-label="Next">
                    Next
                </a>
            </li>
        </ul>
    </nav>

</div>