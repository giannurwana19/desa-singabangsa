<?php
session_start();
include '../koneksi/koneksi.php';

// Login
if (isset($_POST['login'])) {
  $id = $_POST['id_pegawai'];
  $password = $_POST['password'];
  $status = $_POST['status'];

  if ($status == 'admin') {
    $result = mysqli_query($conn, "SELECT id_pegawai, password FROM pegawai WHERE id_pegawai='$id' AND password='$password'");
    $r     = mysqli_fetch_array($result);
    if ($r) {
      $_SESSION['id_pegawai'] = $id; //id pegawai dimasukkan kedalam session
      header("Location: ../admin_page/home.php");
    } else {
?>
      <script type="text/javascript">
        alert("Anda tidak berhasil Login");
        document.location = "index.php";
      </script>
    <?php
    }
  } else if ($status == 'jurnalis') {
    $result = mysqli_query($conn, "SELECT id_jurnalis, password FROM jurnalis WHERE id_jurnalis='$id' AND password='$password'");
    $r     = mysqli_fetch_array($result);
    if ($r) {
      $_SESSION['id_jurnalis'] = $id; //id jurnalis dimasukkan kedalam session
      header("Location: ../jurnalis_page/home.php");
    } else {
    ?>
      <script type="text/javascript">
        alert("Login Gagal");
        document.location = "index.php";
      </script>
<?php
    }
  }
}
