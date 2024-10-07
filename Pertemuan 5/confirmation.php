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
            $birthday = $_POST['birthday'];

            // Parse birthday and format
            list($year, $month, $day) = explode('-', $birthday);
            $monthName = date("F", mktime(0, 0, 0, $month, 1));
            $formattedBirthday = "$day $monthName, $year";

            // Create a DateTime object for the user's birthday
            $birthDate = new DateTime($birthday); // Using original $birthday which is in 'YYYY-MM-DD' format
            $today = new DateTime();
            $age = $today->diff($birthDate)->y; // Calculate age

            # ==== ECHO ==== #
            echo "<p>Nama: $nama</p>";
            echo "<p>Kewarganegaraan: $citizenship</p>";
            echo "<p>Layanan yang dipilih: $website_services</p>";

            # ECHO HOBBY #
            if (isset($_POST['hobby'])) { // If hobbies are present
                $hobby = $_POST['hobby'];
                $hobbyCount = count($hobby);
                echo "<p>Hobi: ";
                for ($i = 0; $i < $hobbyCount; $i++) {
                    echo htmlspecialchars($hobby[$i]);

                    if ($i == $hobbyCount - 2) { // If second to last item
                        echo ", dan ";
                    } elseif ($i < $hobbyCount - 2) { // If not last or second to last
                        echo ", ";
                    }
                }
                echo "</p>"; // Close hobbies paragraph
            } else {
                echo '<p>Hobi: Tidak ada hobi dipilih</p>';
            }

            // Output formatted birthday and age
            echo "<p>Tanggal lahir: $formattedBirthday. Berarti umur anda sudah $age tahun.</p>";

            # ==== ==== ==== #
        } else {
            echo "<p>Tidak ada data yang dikirim.</p>";
        }
        ?>
        <a href="kontak.php" class="btn btn-primary">Kembali ke Formulir</a>
    </div>
</body>
</html>
