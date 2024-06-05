<?php include "../layout/header.php"; ?>

<?php

include "../assets/database.php";

$sql = "select * from pembayaran ";

$hasil = $koneksi->query($sql);

?>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Distributor</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <a href="createpembayaran.php" class="btn btn-primary">Tambah</a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">no_transaksi</th>
                                        <th scope="col">tanggal</th>
                                        <th scope="col">nis</th>
                                        <th scope="col">bulan_tagihan</th>
                                        <th scope="col">tahun_tagihan</th>
                                        <th scope="col">admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1; ?>
                                    <?php foreach ($hasil as $p){ ?>
                                        <tr>
                                            <th scope="row">
                                                <?= $a; ?>
                                            </th>
                                            <td>
                                                <?= $p['no_transaksi']; ?>
                                            </td>
                                            <td>
                                                <?= $p['tanggal']; ?>
                                            </td>
                                            <td>
                                                <?= $p['nis']; ?>
                                            </td>
                                            <td>
                                                <?= $p['bulan_tagihan']; ?>
                                            </td>
                                            <td>
                                                <?= $p['tahun_tagihan']; ?>
                                            </td>
                                            <td>
                                                <?= $p['admin_id']; ?>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    <?php $a++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "../layout/fother.php"; ?>
        </div>
    </div>
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app-style-switcher.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>