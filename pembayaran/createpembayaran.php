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

    <form action="pasok.php" method="post">
        <div class="mb-3">
            <label for="no_transaksi" class="form-label">no_transaksi</label>
            <input type="text" class="form-control" id="no_transaksi" name="no_transaksi">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">tanggal</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">nis</label>
            <input type="text" class="form-control" id="nis" name="nis">
        </div>
        <div class="mb-3">
            <label for="bulan_tagihan" class="form-label">bulan_tagihan</label>
            <input type="text" class="form-control" id="bulan_tagihan" name="bulan_tagihan">
        </div>
        <div class="mb-3">
            <label for="tahun_tagihan" class="form-label">tahun_tagihan</label>
            <input type="text" class="form-control" id="tahun_tagihan" name="tahun_tagihan">
        </div>
        <div class="mb-3">
            <label for="admin_id" class="form-label">admin_id</label>
            <input type="text" class="form-control" id="admin_id" name="admin_id">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>