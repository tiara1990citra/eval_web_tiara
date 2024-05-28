<?php include('index.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Ubah Password Admin</h2>
        <form action="proses_ubah_password.php" method="POST">
            <div class="input-group">
                <label for="old_password">Password Lama:</label>
                <input type="password" id="old_password" name="old_password" required>
            </div>
            <div class="input-group">
                <label for="new_password">Password Baru:</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Konfirmasi Password Baru:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" name="submit">Simpan</button>
        </form>
    </div>
</body>
</html>