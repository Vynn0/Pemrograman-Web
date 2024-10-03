<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-left p-5 my-5 mx-auto border">
        <h1>Konfirmasi Kontak:</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $citizenship = htmlspecialchars($_POST['citizenship']);
            $website_services = isset($_POST['website']) ? implode(", ", $_POST['website']) : "Tidak ada layanan dipilih";

            echo "<p>Nama: $nama</p>";
            echo "<p>Kewarganegaraan: $citizenship</p>";
            echo "<p>Layanan yang dipilih: $website_services</p>";
        } else {
            echo "<p>Tidak ada data yang dikirim.</p>";
        }
        ?>
        <a href="kontak.php" class="btn btn-primary">Kembali ke Formulir</a>
    </div>
</body>
</html>