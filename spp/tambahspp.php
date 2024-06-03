<?php 
include "../assets/database.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $kode_jurusan = $_POST['$kode_jurusan'];
    $deskripsi = $_POST['deskripsi'];

    $ti = $koneksi->prepare("INSERT INTO jurusan (kode_jurusan,  deskripsi) values (?, ?)");
    $ti->bind_param("ss", $kode_jurusan, $deskripsi);

    if($ti->execute()){
        header("location: index.php");
        exit();
    } else {
        echo"Error: "; 
    }
    $ti->close();
}
$koneksi->close();
; ?>
<? include "../layout/header.php";?>

<main id="main" class="main">
    <div class="pagetitle">
        <nav>
        </nav>
    </div>
    <section class="section">
        <div class="container">

            <div class="card p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="kode_jurusan" class="form-label">kode jurusan</label>
                        <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" autocomplete="o">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>

            </div>

        </div>

    </section>

</main>
<?php include "../layout/fother.php"; ?>