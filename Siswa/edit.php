<?php
include "../assets/database.php";
$sql = "SELECT * from siswa where nis =" . $_GET['nis'];
$hasil = $koneksi->query($sql);

$ti = ($hasil->fetch_assoc());


if (isset($_POST['nis'])) {

    $sql = "update siswa set 
      nis = '" . $_POST['nis'] . "',
      nama_lengkap = '" . $_POST['nama_lengkap'] . "',
      alamat = '" . $_POST['alamat'] . "',
      kelas_id = '" . $_POST['kelas_id'] . "',
      spp_id = '" . $_POST['spp_id'] . "'
  ";

    $koneksi->query($sql);

    header('location:tabelsiswa.php');

}
; ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nis" class="form-label">nis</label>
            <input type="text" class="form-control" id="nis " name="nis" value="<?= $p['nis']; ?>">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">nama_lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap " name="nama_lengkap" value="<?= $p['nama_lengkap']; ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $p['alamat']; ?>">
        </div>
        <div class="mb-3">
            <label for="kelas_id" class="form-label">kelas_id</label>
            <input type="text" class="form-control" id="kelas_is" name="kelas_id" value="<?= $p['kelas_id']; ?>">
        </div>
        <div class="mb-3">
            <label for="spp_id" class="form-label">spp_id</label>
            <input type="text" class="form-control" id="spp_id" name="spp_id" value="<?= $p['spp_id']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>